@extends('layouts/app')

@section('title','Bar#180 MENU')
    
@section('content')
    @foreach ($items as $item)
        <hr>
        <li>{{$item->name}}</li>
        <li>￥{{$item->price}}</li>
    @endforeach
@endsection