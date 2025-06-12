<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


        protected $fillable = [
            'sky',
            'name',
            'description',
            'image_path',
            'price',
            'subcategory_id',
    ];


    //Relacion uno a muchos inversa
    public function subcategory () {
        return $this->belongsTo(Subategory::class);
    }
    //Relacion uno a muchos
    public function vatiants () {
        return $this->hasMany(Variant::class);
    }

    //Relacion uno a muchos inversa
    public function options () {
        return $this->belongsToMany(Option::class)
                    ->withPivot('value')
                    ->withTimestamps();
    }
}
