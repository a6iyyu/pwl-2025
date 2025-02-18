<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Welcome extends Controller
{
    public function hello()
    {
        return 'Hello World!';
    }

    public function greeting()
    {
        return view('blog.hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronaut');
    }
}