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
    public function update(Request $request)
    {
        if ($request-> ajax()){

            DB::update('update users set name = ?, email = ? where id = ?', $request->name,$request->email,Auth::id());
            $done = '<div>DONE</div>';
            return Response($done);
        }

    }

}
