<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locale = App::currentLocale();

        if (App::isLocale('en')) {
            //
            return redirect()->route('language.switch', ['langugage' => 'vi']);
        }

        return view('backend.index');
    }
}
