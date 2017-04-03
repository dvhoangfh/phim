<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Theloai;

class TheloaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Theloai::all();
        return view('theloai',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $theloai = new Theloai();
        $theloai->ten_theloaiphim = $request->tentheloai;
        $theloai->slug = $request->slug;
        $theloai->stt = $request->stt;
        $theloai->save();
        return redirect()->route('theloai')->with([
            'flash_level' => 'info',
            'flash_message' => 'Thêm thành công'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Theloai::all();
        $data_edit = Theloai::findOrfail($id);
        return view('theloai',compact('data','data_edit'));
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
        $theloai = Theloai::findOrfail($id);
        $theloai->ten_theloaiphim = $request->tentheloai;
        $theloai->slug = $request->slug;
        $theloai->stt = $request->stt;
        $theloai->save();
        return redirect()->route('theloai')->with([
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
    public function destroy($id)
    {
        Theloai::destroy($id);
        return redirect()->route('theloai')->with([
            'flash_level' => 'success',
            'flash_message' => 'Xóa thành công'
        ]);
    }
}
