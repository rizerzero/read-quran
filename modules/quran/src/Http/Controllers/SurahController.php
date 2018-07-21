<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\Quran\Models\Surah;
use App\Module\Quran\Models\Ayah;
use App\Module\Quran\Transformers\SurahTransformer;
use Illuminate\Http\Request;
use App\Module\Quran\Models\Language;

class SurahController extends ApiBaseController
{
    protected $module = 'quran';

    public function index()
    {
        return $this->all();
    }

    public function all()
    {
        $allSurah = Surah::get(['id', 'name']);

        return $allSurah;
    }

    public function show($id, Request $request)
    {        
        $languages = $this->getLanguageCodes();
        
        $surah = Surah::with([
                'ayahs' => function($query) use($languages) {
                    $query->whereIn('language_code', $languages);
                }, 
                'ayahs.tags'  => function($query) use($id) {
                    $query->wherePivot('chapter_id', $id);
                }, 
                'ayahs.favoritedBy'  => function($query) use($id) {
                    $query->wherePivot('chapter_id', $id);
                }, 
            ])
            ->find($id);

        $response = transform_response($surah, new SurahTransformer())
            ->toArray();
        
        if (isset($response['data']['ayahs']['data'])) {
            $response['data']['ayahs']['data'] = array_filter($response['data']['ayahs']['data'], function($item) {
                return isset($item['ar']);
            });
        }

        return $response;
    }
}
