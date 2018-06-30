<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\Quran\Models\Surah;
use App\Module\Quran\Models\Verse;
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
                'verses' => function($query) use($languageIds) {
                    $query->whereIn('language_id', $languageIds);
                }, 
                'verses.language'
            ])
            ->find($id);

        $response = transform_response($surah, new SurahTransformer())
            ->toArray();
        
        if (isset($response['data']['verses']['data'])){
            $response['data']['verses']['data'] = array_filter($response['data']['verses']['data'], function($item) {
                return isset($item['ar']);
            });
        }

        $response = collect($response);

        return $response;
    }
}
