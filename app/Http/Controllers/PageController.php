<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function characters()
    {
        return view('characters');
    }

    public function movies()
    {
        return view('movies');
    }

    public function tv()
    {
        return view('tv');
    }

    public function games()
    {
        return view('games');
    }

    public function collectiobles()
    {
        return view('collectiobles');
    }

    public function videos()
    {
        return view('videos');
    }

    public function fans()
    {
        return view('fans');
    }

    public function news()
    {
        return view('news');
    }

    public function shop()
    {
        return view('shop');
    }
}
