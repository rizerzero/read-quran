<?php namespace App\Module\Quran\Http\Controllers;

use Illuminate\Http\Request;
use App\Module\Quran\Models\Tag;
use App\Http\Controllers\Controller;

class TagController extends ApiBaseController
{
    protected $module = 'quran';

    public function add($surahId, $verseId, Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
      
        $tag = Tag::firstOrCreate($request->only('name'));

        $tag->ayahs($surahId)->syncWithoutDetaching([
            $verseId => [
                'surah_id' => $surahId
            ]
        ]);

        return $tag->ayahs()->where('language_id', 50)->get();
    }

    public function remove($surahId, $verseId, Request $request)
    {

        $this->validate($request, [
            'name' => 'required'
        ]);
      
        $tag = Tag::firstOrCreate($request->only('name'));

        $tag->ayahs($surahId)->detach([
            $verseId
        ]);
        
        return $tag;
    }
}
