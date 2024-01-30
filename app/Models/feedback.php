<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    use HasFactory;
    public static function getallfeedbacks()
    {
        $result = DB::table('feedback')
        ->select('id','name','email','message','rating')
        ->get()
        ->toarray();
        return $result;
    }
}
