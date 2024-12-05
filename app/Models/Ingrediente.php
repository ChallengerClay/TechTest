<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $fillable =['id','nombre','precio'];

    public static function rules(){
        return [
            'nombre' => 'required|max:255|unique'.self::class,
            'precio' => 'required|numeric',
        ];
    }

    public function pizzas(){
        return $this->belongsToMany(Pizza::class, 'pizza_ingredient');
    }
}
