<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Article extends Controller
{
    public function articles($id_articles)
    {
        return "Halaman Artikel dengan ID $id_articles.";
    }
}