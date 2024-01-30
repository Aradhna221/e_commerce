<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointdate extends Model
{
    use HasFactory;
    public static function getallappointdates()
    {
        $result = DB::table('appointdates')
        ->select('id',
        'date',
        'time',
        'category')
        ->get()
        ->toarray();
        return $result;
    }
}
