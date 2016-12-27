<?php
/**
 * Created by PhpStorm.
 * User: mahbub
 * Date: 12/26/16
 * Time: 12:07 AM
 */

namespace App\Module\Quran\Transformers;


use App\Module\Quran\Models\Language;
use App\Module\Quran\Models\Surah;
use League\Fractal\TransformerAbstract;

class LanguageTransformer extends TransformerAbstract
{

    public function transform(Language $language)
    {
        return [
            'id' => $language->ref_id,
            'name' => $language->name,
            'code' => $language->code
        ];

    }

}