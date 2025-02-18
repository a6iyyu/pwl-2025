<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class About extends Controller
{
    public function about(): string
    {
        $nama = "Rafi Abiyyu Airlangga";
        $nim = 2341720115;
        return "Nama: $nama <br /> NIM: $nim";
    }
}