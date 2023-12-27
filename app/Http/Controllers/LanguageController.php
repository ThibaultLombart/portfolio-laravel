<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        if (isset($lang) && in_array($lang, config('app.available_locales'))) {
            app()->setLocale($lang);
            session()->put('locale', $lang);
        }

        return redirect()->back();
    }
}
