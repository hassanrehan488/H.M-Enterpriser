<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function set(string $locale): RedirectResponse
    {
        abort_unless(in_array($locale, ['en', 'ar', 'ur']), 404);

        session(['locale' => $locale]);
        App::setLocale($locale);

        return back();
    }
}
