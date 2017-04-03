<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Quocgia;
class QuocgiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Quocgia::all();
        return view('quocgia',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quocgia = new Quocgia();
        $quocgia->ten_quocgia = $request->tenquocgia;
        $quocgia->slug = $request->slug;
        $quocgia->stt = $request->stt;
        $quocgia->save();
        return redirect()->route('quocgia')->with([
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
        $data = Quocgia::all();
        $data_edit = Quocgia::findOrfail($id);
        return view('quocgia',compact('data','data_edit'));
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
        $quocgia = Quocgia::findOrfail($id);
        $quocgia->ten_quocgia = $request->tenquocgia;
        $quocgia->slug = $request->slug;
        $quocgia->stt = $request->stt;
        $quocgia->save();
        return redirect()->route('quocgia')->with([
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
        Quocgia::destroy($id);
        return redirect()->route('quocgia')->with([
            'flash_level' => 'success',
            'flash_message' => 'Xóa thành công'
        ]);
    }
}
