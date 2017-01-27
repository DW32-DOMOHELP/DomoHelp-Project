@extends('layouts.app')

@section('content')

    <h1>Bienvenido a tu interface</h1>
    
    {{ Form::submit('ON', array('style' => 'width:200px;  height:200px; background-color:green; color:white;')) }}

@stop