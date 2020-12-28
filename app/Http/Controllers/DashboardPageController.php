<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    function getHome()
    {
        return view('dashboard.pages.home');
    }

    function getKursusSaya()
    {
        return view('dashboard.pages.kursus-my');
    }

    function getBuatKursus()
    {
        return view('dashboard.pages.kursus-buat');
    }

    function getPrivatSaya()
    {
        return view('dashboard.pages.privat-my');
    }

    function getBuatPrivat()
    {
        return view('dashboard.pages.privat-buat');
    }

    function getMuridPrivat()
    {
        return view('dashboard.pages.murid-privat');
    }

    function getPermintaanPrivat()
    {
        return view('dashboard.pages.permintaan-privat');
    }
}
