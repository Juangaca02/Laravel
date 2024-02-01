@extends('layouts.master')
@section('title', 'DWES')
@section('header')
    @parent <br>
    Cabecera de la vista master
@endsection
@section('contenido')
    <p>Contenido del master</p>
@endsection
@section('footer')
    @parent <br>
    Pie de la vista master
@endsection
