<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function find(Request $request)
    {
        return User::search($request->get('q'))->with('profile')->get();
    }
}
