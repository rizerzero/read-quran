<?php
/**
 * Created by PhpStorm.
 * User: mahbub
 * Date: 12/26/16
 * Time: 12:15 AM
 */

namespace App\Module\Quran\Transformers;


use App\Module\Quran\Models\Verse;
use League\Fractal\TransformerAbstract;

class VerseTransformer extends TransformerAbstract
{
    public function transform($verses)
    {
        $result = null;
        $verseId = 0;
        foreach ($verses as $verse) {
            if (!isset($result[$verse->verse_id])) {
                $verseId = $verse->verse_id;
                $result[$verseId] = [
                    'audio_url' => $verse->audio_url
                ];
            }
            $lang = $verse->language?$verse->language->code: $verse->DatabaseID;
            $result[$verse->verse_id] = array_merge(
                $result[$verse->verse_id],
                [
                    $lang => $verse->ayah
                ]
            );
        }

        return $result;
    }
    
}