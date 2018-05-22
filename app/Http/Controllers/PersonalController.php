<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;

class PersonalController extends Controller
{
    public function personal()
    {


        return view('personal');
    }
}
