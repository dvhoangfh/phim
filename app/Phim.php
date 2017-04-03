<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Phim extends Model
{
    protected $table = 'tbl_phim';
    public $timestamps = true;

    public function InsertGetID($phim_data)
    {
    	$id = DB::table('tbl_phim')->insertGetId($phim_data);
		return $id;
    }

    // public function GetAllPhim()
    // {
    // 	$result = DB::table('tbl_phim AS p')
    // 			->join('tbl_theloai_phim AS tlp', 'tlp.idphim', '=', 'p.id','LEFT')
    //             ->join('tbl_quocgia_phim AS qgp', 'qgp.idphim', '=', 'p.id','LEFT')
    //             ->join('dm_theloaiphim AS dmtl', 'dmtl.id', '=', 'tlp.idtheloai','LEFT')
    //             ->join('dm_quocgia AS dmqg', 'dmqg.id', '=', 'qgp.idquocgia','LEFT')
    //             ->select('p.id', 'p.ten_phim', 'p.phimbo', 'dmtl.ten_theloaiphim', 'dmqg.ten_quocgia')->get();
    //     return $result;
    // }

    public function GetAllPhim()
    {
    	$result = DB::table('tbl_phim AS p')
                ->select('p.id', 'p.ten_phim', 'p.phimbo','p.luotxem')->get();
        return $result;
    }

    public function Gettheloaiphim()
    {
    	$result = DB::table('dm_theloaiphim AS dmtl')
    			->join('tbl_theloai_phim AS tlp', 'dmtl.id', '=', 'tlp.idtheloai','LEFT')
                ->select('dmtl.id', 'dmtl.ten_theloaiphim', 'tlp.idphim')->get();
        return $result;
    }

    public function Getquocgiaphim()
    {
    	$result = DB::table('dm_quocgia AS dmqg')
    			->join('tbl_quocgia_phim AS qgp', 'dmqg.id', '=', 'qgp.idquocgia','LEFT')
                ->select('dmqg.id', 'dmqg.ten_quocgia', 'qgp.idphim')->get();
        return $result;
    }

    public function EditTheloaiphim($id)
    {
    	$result = DB::table('tbl_theloai_phim')
                ->select('*')
                ->where('idphim',$id)
                ->get();
        return $result;
    }

    public function EditQuocgiaphim($id)
    {
    	$result = DB::table('tbl_quocgia_phim')
                ->select('*')
                ->where('idphim',$id)
                ->get();
        return $result;
    }

    public function GetphimID($id)
    {
        $result = DB::table('tbl_phim AS p')
                ->select('p.id', 'p.ten_phim', 'p.phimbo')->get();
        return $result;
    }

    public function GetAllPhimbo($id)
    {
        $result = DB::table('tbl_chitietphim')
                ->select('*')
                ->where('ma_phim',$id)
                ->get();
        return $result;
    }

    public function getBanner()
    {
        $result = DB::table('tbl_phim as p')
        ->join('tbl_banner as bn','bn.idphim', '=' , 'p.id')
        ->select('p.*')
        ->orderBy('stt', 'asc')
        ->get();
        return $result;
    }

    public function Getphimdecu()
    {
        $result = DB::table('tbl_phim as p')
        ->select('p.*')
        ->orderBy('created_at', 'desc')
        ->get();
        return $result;
    }

    public function GetPhimMoi()
    {
        $result = DB::table('tbl_phim as p')
        ->select('p.*')
        ->orderBy('created_at', 'desc')
        ->paginate(9);
        return $result;
    }

    public function GetPhimHay()
    {
        $result = DB::table('tbl_phim as p')
        ->select('p.*')
        ->orderBy('luotxem', 'desc')
        ->paginate(12);
        return $result;
    }

    public function Get_phimLe()
    {
        $result = DB::table('tbl_phim as p')
        ->select('p.*')
        ->where('phimbo',0)
        ->paginate(36);
        return $result;
    }

    public function GetLinkPhimbo($tap,$id)
    {
        $result = DB::table('tbl_chitietphim')
        ->select('*')
        ->where([
            ['tieude',$tap],
            ['ma_phim',$id],
        ])
        ->first();
        return $result;
    }
}
