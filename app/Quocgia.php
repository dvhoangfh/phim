<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Quocgia extends Model
{
    protected $table = 'dm_quocgia';
    
    public function GetAll()
    {
    	$result = DB::table('dm_quocgia')->get();
        return $result;
    }
    public function getID($slug)
    {
    	$result = DB::table('dm_quocgia')
        ->select('id')
        ->where('slug',$slug)->first();
        return $result;
    }

    public function getPhim($id,$page = null)
    {
    	$result = DB::table('tbl_phim as p')
    	->join('tbl_quocgia_phim as qgp','qgp.idphim','=','p.id','INNER')
        ->select('p.*')
        ->where('qgp.idquocgia',$id)->paginate(24);
        return $result;
    }
}
