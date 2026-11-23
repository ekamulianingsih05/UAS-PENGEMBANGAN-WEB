<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DyesthaController extends Controller
{
    public function index()
    {
        return view('dyestha_view');
    }
}