@extends('layouts/app')

@section('title','Bar#180 MENU')
    
@section('content')
<!--selectMenu-->
　<div class="btn-group btn-group-toggle" data-toggle="buttons"> 
    <label id="allMenus" class="btn btn-info active">
      <input type="radio" name="options" id="option1 radio" autocomplete="off" checked>ALL
    </label>
    <label id="drinks" class="btn btn-info">
      <input type="radio" name="options" id="option2 radio" autocomplete="off">DRINK
    </label>
    <label id="foods" class="btn btn-info">
        <input type="radio" name="options" id="option3 raido" autocomplete="off">FOOD
      </label>
  </div>
  <!--selectMenu-end-->
    <div class='abc'>
        @foreach ($allItems as $item)
            <div class='menu'>
                <dt><img src="{{asset('image/'.$item->image_path)}}"></dt>
                <dd>{{$item->name}}</dd>
                <dd>￥{{$item->price}}</dd>
            </div>
        @endforeach
    </div>
    
@endsection

@section('script')
<script>      
     document.querySelector(".nav2").classList.add('active');
 </script>

@endsection

