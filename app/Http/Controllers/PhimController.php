<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Theloai;
use App\Quocgia;
use App\Phim;
use App\Theloaiphim;
use App\Quocgiaphim;
use DB;
use Auth;
class PhimController extends Controller
{
    public function __construct()
    {
        if (Auth::check()) {
           return redirect()->route('login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phim = new Phim();
        $data = $phim->GetAllPhim();
        $theloaiphim = $phim->Gettheloaiphim();
        $quocgiaphim = $phim->Getquocgiaphim();
        // pr($theloaiphim);
        return view('phim.index',compact('data','theloaiphim','quocgiaphim'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloai = Theloai::all();
        $quocgia = Quocgia::all();
        return view('phim.create',compact('theloai','quocgia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phim_data = [
            'ten_phim'     => $request->tenphim,
            'slug'         => $request->slug,
            'tieude'       => $request->tieude,
            'ten_tienganh' => $request->tentienganh,
            'daodien'      => $request->daodien,
            'dienvien'     => $request->dienvien,
            'nhasanxuat'   => $request->nhasanxuat,
            'namsanxuat'   => $request->tenphim,
            'thoiluong'    => $request->thoiluong,
            'linkphim'     => $request->link,
            'noidung'      => $request->noidungphim

        ];
        if($request->phimbo == null){
            $phim_data['phimbo'] = 0;
        }else{
            $phim_data['phimbo'] = 1;
        }
        $phim  = new Phim();
        $id = $phim->InsertGetID($phim_data);

        $post_theloaiphim  = array(
            'matheloai' => $request->theloai,
            );
        for ($i=0 ,$count = count($post_theloaiphim['matheloai']); $i < $count ; $i++) { 
            $post_update_theloai[] = array(
                'idphim' => $id,
                'idtheloai' => $post_theloaiphim['matheloai'][$i]
                );
        }
        Theloaiphim::insert($post_update_theloai);

        $post_quocgiaphim  = array(
            'maquocgia' => $request->quocgia,
            );
        for ($i=0 ,$count = count($post_quocgiaphim['maquocgia']); $i < $count ; $i++) { 
            $post_update_quocgia[] = array(
                'idphim' => $id,
                'idquocgia' => $post_quocgiaphim['maquocgia'][$i]
                );
        }
        Quocgiaphim::insert($post_update_quocgia);

        if ($request->hasFile('anhdaidien')) {
            $phim = Phim::findOrFail($id);
            $file = $_FILES['anhdaidien']['name'];
            $destinationPath = 'upload/anhdaidienphim';
            $request->file('anhdaidien')->move($destinationPath,"MP_".$id . ".jpg");
            $phim->img_phim = sprintf('/upload/anhdaidienphim/%s', "MP_".$id .".jpg");
            $phim->save();
        }

        if ($request->hasFile('anhbanner')) {
            $phim = Phim::findOrFail($id);
            $file = $_FILES['anhbanner']['name'];
            $destinationPath = 'upload/anhbannerphim';
            $request->file('anhbanner')->move($destinationPath,"MP_".$id . ".jpg");
            $phim->banner_phim = sprintf('/upload/anhbannerphim/%s', "MP_".$id .".jpg");
            $phim->save();
        }


        return redirect()->route('phim')->with([
            'flash_level' => 'success',
            'flash_message' => 'Them thành công'
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
        $phim = new Phim();
        $theloai = Theloai::all();
        $quocgia = Quocgia::all();
        $data_edit = Phim::findOrFail($id);
        $data_edit_theloaiphim  = $phim->EditTheloaiphim($id);
        $data_edit_quocgiaphim  = $phim->EditQuocgiaphim($id);
        // pr($data_edit_theloaiphim);
        return view('phim.edit',compact('data_edit','theloai','quocgia','data_edit_theloaiphim','data_edit_quocgiaphim'));
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
        $phim_data = [
            'ten_phim'     => $request->tenphim,
            'slug'         => $request->slug,
            'ten_tienganh' => $request->tentienganh,
            'tieude'       => $request->tieude,
            'daodien'      => $request->daodien,
            'dienvien'     => $request->dienvien,
            'nhasanxuat'   => $request->nhasanxuat,
            'namsanxuat'   => $request->namsanxuat,
            'thoiluong'    => $request->thoiluong,
            'linkphim'     => $request->link,
            'noidung'     => $request->noidungphim
        ];
        if($request->phimbo == null){
            $phim_data['phimbo'] = 0;
        }else{
            $phim_data['phimbo'] = 1;
        }

        DB::table('tbl_phim')
            ->where('id', $id)
            ->update($phim_data);

        DB::table('tbl_theloai_phim')->where('idphim',$id)->delete();
        DB::table('tbl_quocgia_phim')->where('idphim',$id)->delete();

        $post_theloaiphim  = array(
            'matheloai' => $request->theloai,
            );
        for ($i=0 ,$count = count($post_theloaiphim['matheloai']); $i < $count ; $i++) { 
            $post_update_theloai[] = array(
                'idphim' => $id,
                'idtheloai' => $post_theloaiphim['matheloai'][$i]
                );
        }
        Theloaiphim::insert($post_update_theloai);

        $post_quocgiaphim  = array(
            'maquocgia' => $request->quocgia,
            );
        for ($i=0 ,$count = count($post_quocgiaphim['maquocgia']); $i < $count ; $i++) { 
            $post_update_quocgia[] = array(
                'idphim' => $id,
                'idquocgia' => $post_quocgiaphim['maquocgia'][$i]
                );
        }
        Quocgiaphim::insert($post_update_quocgia);

        if ($request->hasFile('anhdaidien')) {
            $phim = Phim::findOrFail($id);
            $file = $_FILES['anhdaidien']['name'];
            $destinationPath = 'upload/anhdaidienphim';
            $request->file('anhdaidien')->move($destinationPath,"MP_".$id . ".jpg");
            $phim->img_phim = sprintf('/upload/anhdaidienphim/%s', "MP_".$id .".jpg");
            $phim->save();
        }

        if ($request->hasFile('anhbanner')) {
            $phim = Phim::findOrFail($id);
            $file = $_FILES['anhbanner']['name'];
            $destinationPath = 'upload/anhbannerphim';
            $request->file('anhbanner')->move($destinationPath,"MP_".$id . ".jpg");
            $phim->banner_phim = sprintf('/upload/anhbannerphim/%s', "MP_".$id .".jpg");
            $phim->save();
        }


        return redirect()->route('phim')->with([
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
        DB::table('tbl_theloai_phim')->where('idphim',$id)->delete();
        DB::table('tbl_quocgia_phim')->where('idphim',$id)->delete();
        Phim::destroy($id);
        return redirect()->route('phim')->with([
            'flash_level' => 'success',
            'flash_message' => 'Xóa thành công'
        ]);
    }
}
