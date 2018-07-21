<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Module\Quran\Models\Ayah;
use App\Module\Quran\Models\Favorite;
use App\User;
use App\Module\Quran\Transformers\AyahTransformer;

class FavoriteController extends ApiBaseController
{
    protected $module = 'quran';

    public function index(Request $request)
    {
        $languages = $this->getLanguageCodes();

        $ayahs = $request->user()
            ->favoriteAyahs()
            ->whereIn('language_code', $languages)
            ->get();

        $ayahsBySurah = $ayahs->sortBy('verse_id')->groupBy('surah_id');
        $transformed['data'] = [];

        foreach ($ayahsBySurah as $ahs) {
            $ahs = transform_response($ahs->groupBy('verse_id'), new AyahTransformer())
                ->toArray();
            array_push($transformed['data'], ...$ahs['data']);
        }

        return $transformed;
    }

    public function store(Request $request)
    {
        $this->validate($request, ['chapter_id' => 'required']);
        
        $ayah = new Ayah();

        $favorite = Favorite::withTrashed()
            ->firstOrCreate([
                'chapter_id' => $request->chapter_id,
                'verse_id' => $request->verse_id,
                'created_by' => \Auth::id() ?: 1,
                'favoritable_type' => $ayah->getMorphClass()
            ]);

        $favorite->toggle();

        return $favorite;
    }
}
