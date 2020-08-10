@extends('layouts/app')

@section('title','Bar#180 MENU')

@section('content')
<!--selectMenu-->
　<div class="btn-group btn-group-toggle" data-toggle="buttons">
    <label id="allMenus" class="btn btn-info active">
        <input type="radio" name="options" id="option1 radio" autocomplete="off">ALL
    </label>
    @foreach ($allItems as $item)
    <label id="{{$item->menu_type . 's'}}" class="labelCheck btn btn-info">
        <input type="radio" name="options" autocomplete="off">{{$item->menu_type}}
    </label>
    @endforeach
</div>
<!--selectMenu-end-->
<div class='abc'>
    @foreach ($allItems as $item)
    <div class='menu {{$item->menu_type}}'>
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

    $('#allMenus').on('click', function() {
        $('.menu').show()
    });

    $('labelCheck').on('click', function() {
        const id = $(this).attr('id').slice(0,-1);
        $(`.menu.${id}`).show()
        $(`.menu:not(.${id})`).hide()
    });
</script>


@endsection
