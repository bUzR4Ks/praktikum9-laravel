<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index(Request $request){
        $theme = session('theme', $request->cookie('theme','light'));
        return view('theme.index', compact('theme'));
    }

    public function setTheme(Request $request, $theme){
        if(!in_array($theme, ['light','dark'])){
            abort(400, 'Tema tidak valid');
        }

        session(['theme' => $theme]);

        return redirect ('/')->withCookie(cookie('theme', $theme, 43200));
    }
}
