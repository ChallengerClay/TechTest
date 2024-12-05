<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{

    public function index(){
        $pizzas= Pizza::all();
        return view('pizza.index',compact('pizzas'));
    }
    public function show($id){
        $pizza = Pizza::find($id);
        return view('pizza.show',compact("pizza"));
    }

    public function getCreate(){
        return view('pizza.create');
    }

    public function postCreate(Request $request){
    $validated = $request->validate(Pizza::rules());
    
    }

    public function getEdit($id){
        $pizza = Pizza::find($id);
        return view('pizza.show',compact("pizza"));
    }

    public function postEdit($id){

    }

    public function destroy($id){

    }
}
