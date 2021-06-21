<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //ditulis jika nama tabel berbeda dengan nama model
     protected $table = 'categories';
     //ditulis jika nama kolom yang menjadi primary key bukan id
     protected $primarykey = 'id';
 
      // jika tidak mau memasukkan timestamp
      public $timestamps = false;
 
      //kolom mana aja yang diisi
      protected $fillable = ['name'];
}
