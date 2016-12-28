<?php namespace App\Module\Quran\Http\Controllers;

use App\Http\Controllers\Controller;

class QuranController extends Controller
{
    protected $module = 'quran';

    public function index($name)
    {
        $file  = '/quran/pdf/'.$name . '.pdf';
        if(file_exists(public_path($file))) {
            return view('quran.pdf_format', compact('file'));

        }
        return 'file note found';
    }
}
