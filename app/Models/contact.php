<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class contact extends Model
{
    use HasFactory;
    public static function getallcontacts()
    {
        $result = DB::table('contacts')
        ->select('id','Name','Email','Number','Gender','Message')
        ->get()
        ->toarray();
        return $result;
    }
}
