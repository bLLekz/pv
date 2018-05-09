<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConsignmentController extends Controller
{
    public function consignment()
    {
        $consignment = DB::table('consignment')
            ->paginate(10);
            /*->get();*/
        $qwe = 11;

        return view('consignment',['consignment' => $consignment],['qwe' => $qwe]);
    }
}
