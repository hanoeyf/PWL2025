<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagControllers extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama: [Nama Kamu] <br> NIM: [NIM Kamu]";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan ID " . $id;
    }
}
