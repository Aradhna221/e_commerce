<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkin extends Model
{
    use HasFactory;
    public static function getallcheckins()
    {
        $result = DB::table('checkins')
        ->select('id', 'state','fname','lname','city','country','category','zipcode','email','phone',)
        ->get()
        ->toarray();
        return $result;
    }
}
