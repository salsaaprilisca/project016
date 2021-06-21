<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //ditulis jika nama tabel berbeda dengan nama model
    protected $table = 'products';
    //ditulis jika nama kolom yang menjadi primary key bukan id
    protected $primarykey = 'id';

     // jika tidak mau memasukkan timestamp
     public $timestamps = false;

     //kolom mana aja yang diisi
     protected $fillable = ['name', 'description', 'price', 'category_id'];
}
