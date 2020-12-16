<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    function getHome()
    {
        return view('dashboard.pages.home');
    }
}
