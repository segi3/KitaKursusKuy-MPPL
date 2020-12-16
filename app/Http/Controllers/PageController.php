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
}
