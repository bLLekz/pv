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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
            ->whereRaw(' date >= ? ORDER BY date ASC', [$current_date])
            ->take(4)
            ->get();

        $previous = DB::table('election')
            ->whereRaw(' date < ? ORDER BY date ASC', [$current_date])
            ->take(4)
            ->get();

        $count_cand = DB::table('user_fields')
            ->join('election', 'user_fields.election_id', '=', 'election.id')
//            ->whereRaw('user_fields.election_id = election.id')
            ->count();



        return view('info')->with('upcoming',$upcoming)->with('previous',$previous)->with('count_cand',$count_cand);
    }

    public function info_show($id)
    {
        $election = DB::table('election')
            ->where('id', $id )
            ->first();

        $user_fields = DB::table('user_fields')
            ->where('election_id', $id )
            ->get();

        $users = DB::table('users')
            ->join('user_fields', 'users.id', '=', 'user_fields.user_id')
            ->where('user_fields.election_id', $id)
            ->get();

        $cons = DB::table('consignment')
            ->join('user_fields', 'consignment.id', '=', 'user_fields.consignment_id')
            ->where('user_fields.election_id', $id)
            ->get();


        return view('info_show')->with('election',$election)->with('user_fields',$user_fields)->with('users',$users)->with('cons',$cons);
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
