<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Module\Quran\Models\Surah;
use App\Module\Quran\Models\Verse;
use App\Module\Quran\Transformers\SurahTransformer;

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

    public function show($id)
    {

        $surah = Verse::where('surah_id', $id)

            ->get();
        $surah = Surah::with(['verses', 'verses.language'])->find($id);
//        return $surah->verses->groupBy('verse_id');

        $respose = transform_response($surah, new SurahTransformer())
            ->toArray();

        $respose = collect($respose);
        return $respose;


    }
}
