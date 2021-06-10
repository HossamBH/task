<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::select('id',
        'aboutUs_' . LaravelLocalization::getCurrentLocale() . ' as aboutUs',
    )->first();
        return view('task', compact('aboutUs'));
    }
}
