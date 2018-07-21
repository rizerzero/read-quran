<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;

abstract class ApiBaseController extends Controller
{
    protected $module = 'quran';

    public function __construct()
    {
        config(['auth.defaults.guard' => 'api']);
    }

    public function getLanguageCodes()
    {
        $languages = (array) request()->get('language');
        array_push($languages, 'ar',  'en');

        return $languages;
    }
}
