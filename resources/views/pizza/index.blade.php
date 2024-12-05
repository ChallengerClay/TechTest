@extends('layouts.admin')
<div class="row">
  <div><a href="{{url('pizza/create')}}">Crear</a></div>
</div>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Imagens</th>
        <th>editar
        </th>
        <th>Borrar</th>
      </tr>
    </thead>
<   <tbody>
        <tr>
            @foreach ($pizzas as $pizza)
                <td>{{$pizza->id}}</td>
                <td>{{$pizza->nombre}}</td>
                <td>{{$pizza->imagen}}</td>
                <td><a href="{{url('pizza/edit/'.$pizza->id)}}">Editar</a></td>
                <td><a href="{{url('pizza/destroy/'.$pizza->id)}}">Borrar</a></td>
            @endforeach
        </tr>
    </tbody>