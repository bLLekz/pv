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
            ->take(10)
            ->get();

        $all = DB::table('consignment')->count();

        return view('consignment',['consignment' => $consignment],['all' => $all]);
    }
    public function search(Request $request)
    {
        if ($request-> ajax()){
            $output="";
            $cons=DB::table('consignment')
                ->where('name','LIKE','%'.$request->search.'%')
                ->take(10)
                //->orWhere('full_name','LIKE','%'.$request->search.'%')
                ->get();
            if ($cons){
                foreach ($cons as $key => $con){
                    $output.= '
                    <div class="col-md-6 mt-3 mb-3">
                        <div class="card bor_none">
                            <div class="card-body">
                                <div class="row mt-1 mb-1">
                                    <div class="col-3">
                                        <img src="/img/none.jpg" class="igm_part mb-3">
                                        <a class="part_more" href="/consignment/'.$con->id.'">Подробнее <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title sty_title">'.$con->name.'</h5>
                                        <p class="card-text">'.$con->description.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                return Response($output);
            }
        }
    }
    public function more(Request $request)
    {
        if ($request-> ajax()){
            $output="";
            $more=$request->more;
            $cons = DB::table('consignment')
                ->take($more)
                ->get();
            if ($cons){
                foreach ($cons as $key => $con){
                    $output.= '
                    <div class="col-md-6 mt-3 mb-3">
                        <div class="card bor_none">
                            <div class="card-body">
                                <div class="row mt-1 mb-1">
                                    <div class="col-3">
                                        <img src="/img/none.jpg" class="igm_part mb-3">
                                        <a class="part_more" href="/consignment/'.$con->id.'">Подробнее <i class="fas fa-caret-right"></i></a>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="card-title sty_title">'.$con->name.'</h5>
                                        <p class="card-text">'.$con->description.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
                return Response($output);
            }
        }
    }
}
