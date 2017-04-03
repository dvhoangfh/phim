<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Banner;
use App\Phim;
use DB;
class BannerController extends Controller
{
    public function index()
    {
        $data = Phim::all();
        $banner = new Banner();
        $data_banner = $banner->GetallBanner();
        return view('banner',compact('data','data_banner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $array = $request->arr;
        for ($i=0,$length = count($array); $i < $length; $i++) { 
            $data_array[] =  array(
                'idphim' =>$array[$i]['id'],
                'stt' => $array[$i]['stt']
                );
        }
        DB::table('tbl_banner')->delete();
        Banner::insert($data_array);
        return "success";
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
