<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        return view('welcome');
    }

    public function about ()
    {
        return ('Nama = Rendi Bagus Anggara <br> NIM = 23552021003');
    }

    public function article($id)
    {
        return ('Halaman article ID anda : ').$id;
    }
}
