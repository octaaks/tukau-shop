<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //
    
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    // protected $fillable =[

    //     'category_id',
    //     'name',
    //     'price',
    //     'weight',
        
    //     'image',
    //     'description'
    // ];

    // protected $nullable = [
    // ];
}
