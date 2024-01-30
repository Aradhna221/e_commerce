<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stylist extends Model
{
    use HasFactory;
    public static function getallstylists()
    {
        $result = DB::table('stylists')
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
