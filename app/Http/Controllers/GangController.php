<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GangController extends Controller
{
    public function gang($id)
    {
        $gang = DB::table('consignment')
            ->where('id', $id)
            ->first();

        return view('gang',['gang' => $gang]);
    }
}
