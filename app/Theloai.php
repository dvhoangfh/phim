<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Theloai extends Model
{
    protected $table = 'dm_theloaiphim';
    public function GetAll()
    {
    	$result = DB::table('dm_theloaiphim')->select('*')->get();
        return $result;
    }

    public function getID($slug)
    {
    	$result = DB::table('dm_theloaiphim')
        ->select('id')
        ->where('slug',$slug)->first();
        return $result;
    }

    public function getPhim($id,$page = null)
    {
    	$result = DB::table('tbl_phim as p')
    	->join('tbl_theloai_phim as tlp','tlp.idphim','=','p.id','INNER')
        ->select('p.*')
        ->where('tlp.idtheloai',$id)->paginate(24);
        return $result;
    }
}
