<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar#180-TOP</title>
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick-theme.css')}}"/>
     <link rel="stylesheet" type="text/css" href="{{asset('css/common.css')}}"/>
    
</head>
<body>
    {{--Navbar--}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{asset('image/180logo.png')}}" alt="トップアイコン">　</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">MENU</a>
            <a class="nav-item nav-link" href="#">SNS</a>
            <a class="nav-item nav-link" href="#">LOGIN</a>
          </div>
        </div>
      </nav>
    {{--Navbar-end--}}
    {{--SlickSlider--}}
  
    <ul class="slick01 slick-slider">
        <li class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01" style="width: 920px;"><img src="{{asset('image/slider01.jpeg')}}" alt="slider01"></li>
        <li class="slick-slide slick-current slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide02" aria-describedby="slick-slide-control02" style="width: 920px;"><img src="{{asset('image/slider02.jpeg')}}" alt="slider01"></li>
        <li class="slick-slide slick-current slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03" style="width: 920px;"><img src="{{asset('image/slider03.jpeg')}}"></li>
    </ul>


    {{--SlickSlider-end--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>
</body>
</html>