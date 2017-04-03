<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Phim;
use DB;

class XemphimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $arr = explode('-',trim($slug));
        $id = $arr[sizeof($arr) - 1];
        $tap = $arr[sizeof($arr) - 2];
        $phim = new Phim();
        $luotxem = DB::table('tbl_phim')->select('luotxem')->where('id',$id)->first()->luotxem;
        DB::table('tbl_phim')->where('id', $id)->update(['luotxem' => $luotxem + 1]);
        $data = Phim::find($id);
        $linkphimbo = $phim->GetLinkPhimbo($tap,$id);
        $data_phimbo = $phim->GetAllPhimbo($id);
        $theloaiphim = $phim->Gettheloaiphim();
        $quocgiaphim = $phim->Getquocgiaphim();
        $phimdecu = Phim::paginate(8);
        $check = $data->phimbo;
        $phimlienquan = Phim::where('phimbo',$check)->paginate(8);
        return view('frontend.xemphim',compact('data','theloaiphim','quocgiaphim','data_phimbo','phimdecu','phimlienquan','linkphimbo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
