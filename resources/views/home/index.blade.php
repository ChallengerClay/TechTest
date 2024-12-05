@extends('layouts.main')
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        @foreach($pizzas as $pizza)
        <div class="card" style="width: 18rem;">
            <img src="{{URL::to('/assets/images/'.$pizza->imagen)}}" class="card-img-top" alt="{{$pizza->nombre_pizza}}">
            <div class="card-body">
                <h5 class="card-title">{{$pizza->nombre_pizza}}</h5>
                <p class="card-text"></p>
                <label class="label label-primary">Precio: {{$pizza->total}}</label>
                <a href="{{url('pizza/'.$pizza->id)}}" class="label label-primary">Ver detalles</a>
            </div>
          </div>
        @endforeach
    </div>
</div>
