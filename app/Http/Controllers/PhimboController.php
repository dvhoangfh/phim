<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Phimbo;
use App\Phim;

class PhimboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phimbo = new Phimbo();
        $data = $phimbo->GetPhimBo();
        return view('phimbo.index',compact('data'));
    }


    public function detail($id)
    {
        $maphim = $id;
        $phim = Phim::findOrFail($id);
        $phimbo = new Phimbo();
        $data = $phimbo->getDetailPhimbo($id);
        return view('phimbo.detail',compact('data','maphim','phim'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $phimbo = new Phimbo();
        $phimbo->ma_phim = $id;
        $phimbo->tieude = $request->tieude;
        $phimbo->link = $request->link;
        $phimbo->save();
        return redirect()->route('phimbo.detail',$id)->with([
            'flash_level' => 'success',
            'flash_message' => 'Thêm thành công'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$idphim)
    {
        $phim = Phim::findOrFail($id);
        $maphim = $id;
        $phimbo = new Phimbo();
        $data = $phimbo->getDetailPhimbo($id);
        $data_edit = Phimbo::findOrFail($idphim);
        return view('phimbo.detail',compact('data','data_edit','maphim','phim'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $idphim)
    {
        $phimbo = Phimbo::findOrFail($idphim);
        $phimbo->tieude = $request->tieude;
        $phimbo->link = $request->link;
        $phimbo->ma_phim = $id;
        $phimbo->save();
        return redirect()->route('phimbo.detail',$id)->with([
            'flash_level' => 'success',
            'flash_message' => 'Cập nhật thành công'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idphim)
    {
        Phimbo::destroy($idphim);
        return redirect()->route('phimbo.detail',$id)->with([
            'flash_level' => 'success',
            'flash_message' => 'Xóa thành công'
        ]);
    }
}
