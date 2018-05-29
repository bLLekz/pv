<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function message()
    {
        $msg = DB::table('msg')
            ->where('to_id', Auth::id())
            ->get();

        return view('message',['msg' => $msg]);
    }
    public function show()
    {
        return view('msg_show');
    }
}
