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

    function getTransaksi()
    {
        return view('main.pages.transaksi');
    }

    function getTransaksikursus()
    {
        return view('main.pages.transaksi-kursus');
    }

    function getTransaksiprivat()
    {
        return view('main.pages.transaksi-privat');
    }

    // Isi Kursus
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

    function getKursus6()
    {
        return view('main.pages.kursus-6');
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

    // ! hard code forum diskusi
    function getForumDiskusi()
    {
        return view('main.pages.forum-diskusi');
    }
    function getForumDiskusiThread()
    {
        return view('main.pages.forum-thread');
    }

    // ! privat
    function getPrivat()
    {
        return view('main.pages.privat');
    }

    // Isi Privat
    function getPrivat1()
    {
        return view('main.pages.privat-1');
    }

    function getPrivat2()
    {
        return view('main.pages.privat-2');
    }

    function getPrivat3()
    {
        return view('main.pages.privat-3');
    }

    function getPrivat4()
    {
        return view('main.pages.privat-4');
    }

    function getPrivat5()
    {
        return view('main.pages.privat-5');
    }

    function getPrivat6()
    {
        return view('main.pages.privat-6');
    }
}
