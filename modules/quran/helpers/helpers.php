<?php

if(! function_exists('transform_response')) {

    /**
     * @param \Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection|Array $data
     * @param callable|\League\Fractal\TransformerAbstract $transformerOrCallback
     * @return \League\Fractal\Scope
     */

    function transform_response($data, $transformerOrCallback) {
        $transformer = new \App\Module\Quran\Services\Transformer();
        return $transformer->transform($data, $transformerOrCallback);
    }
}