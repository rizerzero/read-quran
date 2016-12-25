<?php
/**
 * Created by PhpStorm.
 * User: mahbub
 * Date: 12/26/16
 * Time: 12:07 AM
 */

namespace App\Module\Quran\Transformers;


use App\Module\Quran\Models\Surah;
use League\Fractal\TransformerAbstract;

class SurahTransformer extends TransformerAbstract
{
   protected $defaultIncludes = ['verses'];

    public function transform(Surah $surah)
    {
        return [
            'id' => $surah->id,
            'name' => $surah->name,
            'english_title' => $surah->english_title
        ];

    }

    public function includeVerses(Surah $surah)
    {
//        dd($surah->verses->groupBy('VersesID'));
        $verses = $surah->verses->groupBy('VerseID');
        return ($this->collection($verses, new VerseTransformer()));
    }
}