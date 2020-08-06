<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    @yield('stylesheet')

    
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{asset('image/180logo.png')}}" alt="トップアイコン">　</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="{{url('/index')}}">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="{{url('/menu')}}">MENU</a>
            <a class="nav-item nav-link" href="{{url('/sns')}}">SNS</a>
            @if(Auth::check())
              <a class="nav-item nav-link" href="{{url('/logout')}}">LOGOUT</a>
              
            @else
              <a class="nav-item nav-link" href="{{url('/login')}}">LOGIN</a>
            @endif

          <a href="{{url('/')}}"></a>
          </div>
        </div>
      </nav>
    <!--Navbar-end-->

    
        @yield('content')



    <!--script-->
   
    @yield('script')
    <!--script-end-->
</body>
</html>