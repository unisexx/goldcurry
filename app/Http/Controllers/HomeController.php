<?php

namespace App\Http\Controllers;

use App\Models\Instagram;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $instagrams = Instagram::where('status', 1)->orderBy('id', 'desc')->get();
        return view('home', compact('instagrams'));
    }

    public function about()
    {
        return view('about');
    }

    public function shopinfo()
    {
        return view('shopinfo');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contactus()
    {
        return view('contact-us');
    }

    public function franchise()
    {
        return view('franchise');
    }

    public function product()
    {
        return view('product');
    }
}
