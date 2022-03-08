<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index() {
        $data = config('comics');
        return view('comics', compact($data));
    }
}
