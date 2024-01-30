<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
   
    public static function getallproducts()
    {
        $result = DB::table('products')
        ->select('id',
        'Name',
        'Quantity',
        'Price',
        'Type',
        'Details',
        'Image')
        ->get()
        ->toarray();
        return $result;
    }
}
