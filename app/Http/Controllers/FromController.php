<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FromController extends Controller
{
    public function form()
    {
        return view('form');
    }
}
