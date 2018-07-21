<?php namespace App\Module\Quran\Http\Controllers;

use App\Module\Quran\Models\Language;
use App\Module\Quran\Transformers\LanguageTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends ApiBaseController
{
    protected $module = 'quran';



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $AllLanguages = Language::whereNotIn('code', ['ar', 'en'])
            ->orderBy('name')
            ->get();

        return transform_response($AllLanguages, new LanguageTransformer())
            ->toArray();
    }

}
