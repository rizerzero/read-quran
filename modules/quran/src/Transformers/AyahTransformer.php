<?php
/**
 * Created by PhpStorm.
 * User: mahbub
 * Date: 12/26/16
 * Time: 12:15 AM
 */

namespace App\Module\Quran\Transformers;


use App\Module\Quran\Models\Ayah;
use League\Fractal\TransformerAbstract;

class AyahTransformer extends TransformerAbstract
{
    public function transform($ayahs)
    {
        $result = null;
        $verseId = 0;

        // dd($ayahs);
        foreach ($ayahs as $verse) {
            if (!isset($result[$verse->verse_id])) {
                $verseId = $verse->verse_id;
                $result[$verseId] = [
                    'audio_url' => $verse->audio_url,
                    'verse_id' => ($verseId),
                    'tags' => $verse->tags->pluck('name')->all(),
                ];
            }
            $lang = $verse->language ? $verse->language->code : $verse->verse_id;
            $result[$verse->verse_id] = array_merge(
                $result[$verse->verse_id],
                [
                    $lang => $verse->ayah
                ]
            );
        }
        
        return $result[$verseId];
    }
    
}