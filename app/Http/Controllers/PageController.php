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

    // Deskripsi Kursus
    function getKursus1()
    {
        return view('main.pages.kursus-1');
    }

    function getKursus2()
    {
        return view('main.pages.kursus-2');
    }

    function getKursus3()
    {
        return view('main.pages.kursus-3');
    }

    function getKursus4()
    {
        return view('main.pages.kursus-4');
    }

    function getKursus5()
    {
        return view('main.pages.kursus-5');
    }

    // ! hard code Konten Kursus
    function getKontenKursus1()
    {
        return view('main.pages.kursus-konten');
    }

    function getKontenKursus2()
    {
        return view('main.pages.kursus-konten2');
    }

    function getKontenKursus3()
    {
        return view('main.pages.kursus-konten3');
    }

    function getKontenKursus4()
    {
        return view('main.pages.kursus-konten4');
    }

    function getKontenKursus5()
    {
        return view('main.pages.kursus-konten5');
    }

    function getKontenKursus6()
    {
        return view('main.pages.kursus-konten6');
    }

    // ! privat
    function getPrivat()
    {
        return view('main.pages.privat');
    }
}
