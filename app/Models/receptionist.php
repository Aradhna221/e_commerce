<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receptionist extends Model
{
    use HasFactory;
    public static function getallreceptionists()
    {
        $result = DB::table('receptionists')
        ->select('id',
        'Name',
        'Email',
        'Password',
        'Profile')
        ->get()
        ->toarray();
        return $result;
    }
}
