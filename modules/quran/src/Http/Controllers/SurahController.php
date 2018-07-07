<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\Quran\Models\Surah;
use App\Module\Quran\Models\Ayah;
use App\Module\Quran\Transformers\SurahTransformer;
use Illuminate\Http\Request;
use App\Module\Quran\Models\Language;

class SurahController extends Controller
{
    protected $module = 'quran';

    public function index()
    {
        return view('surah.show');
    }
    public function all()
    {
        $allSurah = Surah::get(['id', 'name']);

        return $allSurah;
    }

    public function show($id, Request $request)
    {
        $languages = (array) $request->get('language');
        $languages[] = 'ar';
        $languages[] = 'en';
        
        $languageIds = Language::whereIn('code', $languages)->pluck('ref_id')->all();

        $surah = Surah::with([
                'ayahs' => function($query) use($languageIds) {
                    $query->whereIn('language_id', $languageIds);
                }, 
                'ayahs.language',
                'ayahs.tags'  => function($query) use($id) {
                    $query->wherePivot('surah_id', $id);
                }, 
            ])
            ->find($id);

        $response = transform_response($surah, new SurahTransformer())
            ->toArray();
        
        if (isset($response['data']['ayahs']['data'])){
            $response['data']['ayahs']['data'] = array_filter($response['data']['ayahs']['data'], function($item) {
                return isset($item['ar']);
            });
        }

        $response = collect($response);

        return $response;
    }
}
