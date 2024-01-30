<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    public static function getallservices()
    {
        $result = DB::table('services')
        ->select('id','service_name','service_detail','service_image')
        ->get()
        ->toarray();
        return $result;
    }
}
