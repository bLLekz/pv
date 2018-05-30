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
            ->whereRaw('id IN (SELECT DISTINCT (to_id) FROM `msg` WHERE to_id = ?) order by `date` ASC', [Auth::id()])
            ->get();

        $name = DB::table('users')
            ->select('name','id')
            ->WhereRaw('users.id IN (SELECT from_id FROM msg WHERE to_id = ? )', [Auth::id()])
            ->get();

        return view('message',['msg' => $msg])->with('name',$name);
    }
    public function show($id)
    {
        $msg = DB::table('msg')
            ->whereRaw('(to_id = ? and from_id =?) or (to_id = ? and from_id =?) ORDER BY `msg`.`date` ASC', [$id,Auth::id(),Auth::id(),$id])
            ->get();

        $name = DB::table('users')
            ->select('name')
            ->Where('id', $id)
            ->get();

        return view('msg_show',['msg' => $msg],['name' => $name]);
    }
}
