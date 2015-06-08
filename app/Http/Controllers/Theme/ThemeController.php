<?php namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;

class ThemeController extends Controller {


    public function index ()
    {
        return view('theme.index');
    }

    public function buttons ()
    {
        return view('theme.ui.buttons');
    }

}
