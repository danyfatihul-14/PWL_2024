<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id)
    {
        // Logic untuk menampilkan halaman dinamis berdasarkan id
        return 'Halaman Artikel dengan id'. $id;
    }
}
