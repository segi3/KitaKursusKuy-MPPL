<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getHome()
    {
        return view('main.pages.home');
    }

    function getKursus()
    {
        return view('main.pages.kursus');
    }

    function getUserlogin()
    {
        return view('main.pages.user-login');
    }

    function getMentorlogin()
    {
        return view('main.pages.mentor-login');
    }

    function getUserregister()
    {
        return view('main.pages.user-register');
    }

    function getMentorregister()
    {
        return view('main.pages.mentor-register');
    }

    function getTransaksikursus()
    {
        return view('main.pages.transaksi-kursus');
    }

    function getTransaksiprivat()
    {
        return view('main.pages.transaksi-privat');
    }
}
