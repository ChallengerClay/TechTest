@extends('layout.admin')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 
<form action="{{url('create')}}" method="POST">
    @csrf
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col xs-12">
                <label for="name">
                    <input type="text" name='name'>
                </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col xs-12">
                <label for="last_name">
                    <input type="text" name='last_name'>
                </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col xs-12">
                <label for="email">
                    <input type="email" name='email'>
                </label>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col xs-12">
                <label for="password">
                    <input type="password" name='password'>
                </label>
            </div>
            <input class="btn btn-default" type="submit" value='Registrarse'>
        </div>
    </div>
</form>