@extends('layouts/app')

@section('title', 'Bar#180 SNS')

@section('content')

    @if(Auth::check())
        <p>ログインしています</p>
　　 @else
        <p>ログインしてください</p>
    @endif

@endsection

@section('script')
    <script>
        document.querySelector('.nav3').classList.add('active');
    </script>
@endsection