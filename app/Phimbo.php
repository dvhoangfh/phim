<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Phimbo extends Model
{
    protected $table = 'tbl_chitietphim';
    public $timestamps = false;

    public function GetPhimBo()
    {
    	$result = DB::table('tbl_phim as p')
        ->select('p.id', 'p.ten_phim')
        ->where('phimbo',1)->get();
        return $result;
    }

    public function getDetailPhimbo($id)
    {
    	$result = DB::table('tbl_chitietphim as ct')
    	->join('tbl_phim as p','p.id', '=' , 'ct.ma_phim')
        ->select('p.ten_phim','p.id','ct.*')
        ->where('p.id',$id)->get();
        return $result;
    }
}
