<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');
    }

    public function info()
    {
//        Carbon::setLocale(config('app.locale'));
//        echo Carbon::now()->format('d M y');  // 5 days ago


        $current_date = Carbon::now('Europe/Moscow');

        $upcoming = DB::table('election')
            ->whereRaw(' date >= ?', [$current_date])
            ->take(4)
            ->get();

        $previous = DB::table('election')
            ->whereRaw(' date < ?', [$current_date])
            ->take(4)
            ->get();



        return view('info')->with('upcoming',$upcoming)->with('previous',$previous);
    }

    public function info_show($id)
    {
        $election = DB::table('election')
            ->where('id', $id )
            ->first();

        return view('info_show')->with('election',$election);
    }


    public function where()
    {
        return view('where');
    }

    public function questions()
    {
        return view('questions');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
