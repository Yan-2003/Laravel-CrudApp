<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    public function __invoke()
    {
        $result = $_SERVER['REQUEST_URI'];
        return view('404', ['url' => $result]);
    }
}
