<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pizza extends Model
{
    protected $fillable =['id','nombre','image'];
    
    public static function getPizzas(){
        return self::select('pizzas.id','pizzas.nombre as nombre_pizza', 'pizzas.imagen', DB::raw("GROUP_CONCAT(ingredientes.nombre ORDER BY ingredientes.nombre SEPARATOR ', ') AS ingredientes"), DB::raw('sum(ingredientes.precio)*2'))
        ->join('pizza_ingredient','pizza_ingredient.pizza_id','=','pizzas.id')
        ->join('ingredientes','pizza_ingredient.ingrediente_id','=','ingredientes.id')
        ->groupBy('pizzas.id')
        ->get();
    }


    public static function rules(){
        return [
            'name' => 'required|max:255|unique'.self::class,
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, 'pizza_ingredient');
    }
}
