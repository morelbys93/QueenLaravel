@extends('layouts.app')
<link rel="stylesheet" href="css/styleregister.css"></html>
<h1>Hola, Somos productos </h1>
@foreach ($products as $product)
  <ul>
    <li>{{$product->name}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->price}}</li>
    <li>{{$product->type}}</li>
    <li>{{$product->promoted}}</li>
    <li>{{$product->slider}}</li>
  </ul>
@endforeach
@section('content')
