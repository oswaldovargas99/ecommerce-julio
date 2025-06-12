<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{

    protected $fillable = [
        'sku',
        'iamge_path',
        'product_id',
    ];

        //Relacion uno a muchos inversa
    public function product () {
        return $this->belongsTo(Product::class);
    }

            //Relacion uno a muchos inversa
    public function features () {
        return $this->belongsToMany(Feature::class)
                    ->withTimestamps();
    }
}
