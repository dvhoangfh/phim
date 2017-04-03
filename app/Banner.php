<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Banner extends Model
{
    protected $table = 'tbl_banner';
    public $timestamps = false;

    public function GetallBanner()
    {
    	$result = DB::table('tbl_phim as p')
    	->join('tbl_banner as bn','bn.idphim', '=' , 'p.id')
        ->select('p.ten_phim','p.id')
        ->orderBy('stt', 'asc')
        ->get();
        return $result;
    }
}
