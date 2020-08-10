@extends('layouts/app')

@section('title','Bar#180 MENU')
    
@section('content')
<!--selectMenu-->
　<div class="btn-group btn-group-toggle" data-toggle="buttons"> 
    <label id="allMenus" class="btn btn-info active">
      <input type="radio" name="options" id="option1 radio" autocomplete="off" >ALL
    </label>
    <label id="drinks" class="btn btn-info">
      <input type="radio" name="options" id="option2 radio" autocomplete="off" >DRINK
    </label>
    <label id="foods" class="btn btn-info">
        <input type="radio" name="options" id="option3 radio" autocomplete="off" checked>FOOD
      </label>
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
        $('input').prop('checked',false);
        $(this).prop('checked',true);
        
        if($(this).find('input').prop("checked")) {
            $('.menu').show()
        } else {
            $('.menu').hide()
        }
    });
    $('#drinks').on('click', function() {
        $('input').prop('checked', true);
        $(this).prop('checked',true);

        if($(this).find('input').prop("checked")) {
            $('.drink').show()
        } else {
            $('.drink').hide()
        }
    });
    $('#foods').on('click', function() {
        $('input').prop('checked',false);
        $(this).prop('checked',true);
        
        if($(this).find('input').prop("checked")) {
            $('.food').show()
        } else {
            $('.food').hide()
        }
    });
</script>
 

@endsection

