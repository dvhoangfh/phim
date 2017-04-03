<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Quocgia;
use App\Phim;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $phim = new Phim();
        $data_banner = $phim->getBanner();
        $quocgia = Quocgia::all();
        $theloai = Theloai::all();
        $data_phimmoi = $phim->GetPhimMoi();
        $data_phimhay = $phim->GetPhimHay();
        $data_phimle = $phim->Get_phimLe();
        // pr($data_phimle->toArray());
        return view('frontend.home',compact('theloai','quocgia','data_banner','data_phimmoi','data_phimhay','data_phimle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $keyword = trim($request->term);
        $data = Phim::where('ten_phim', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('slug', 'LIKE', '%'.$keyword.'%')
                    ->orWhere('ten_tienganh', 'LIKE', '%'.$keyword.'%')
                    ->select('*')->get()
                    ->toArray();
        return json_encode($data);
    }
}
