<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex(){
        $pizzas = Pizza::getPizzas();
        return view('home.index',compact('pizzas'));
    }
}
