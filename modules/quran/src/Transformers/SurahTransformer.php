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
            'name' =>  $surah->name,
            'english_title' => $surah->english_title,
            'audio_url' => $surah->audio_url,
        ];

    }

    public function includeVerses(Surah $surah)
    {
        $ayahs = $surah->ayahs->groupBy('verse_id');
        $ayahs = $this->collection($ayahs, new AyahTransformer());
        return $ayahs;
    }
}