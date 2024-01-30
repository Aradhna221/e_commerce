<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    public static function getallappointments()
    {
        $result = DB::table('appointments')
        ->select('id',
        'First_name',
        'Last_name',
        'Email',
        'Phone',
        'Category',
        'Date',
        'Time',
        'Status')
        ->get()
        ->toarray();
        return $result;
    }
}
