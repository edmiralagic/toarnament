@extends('app')

@section('navStyle')
style="background: transparent;"
@stop

@section('content')
    <div class="home_splash" id="homesplash">
        <div class="home_splash_button" id="home_splash_button-left">
            <img src="/img/leftArrow.svg"/>
        </div>
        <div class="home_splash_text" id="text1">
            <h1>Register.</h1><br>
            Stop waiting around and become a member already!
        </div>
        <div class="home_splash_text" id="text2" style="display: none;">
            <h1>Play.</h1>
            Play competitive tournaments against players from around the world!
        </div>
        <div class="home_splash_text" id="text3" style="display: none;">
            <h1>Win.</h1>
            Compete for cash prizes and fame.
        </div>
        {{-- <div class="button--splash bounce">
            <img src=" {{ asset('img/down.svg') }} "/>
        </div> --}}
        <div class="home_splash_button" id="home_splash_button-right">
            <img src="/img/rightArrow.svg"/>
        </div>
    </div>
    <div class="container" id="second--container">
        <div class="section align--left">
            <h2>What is Toarnament?</h2>
            Toarnament is a simple, easy to use website that provides continuous tournaments for popular gaming titles such as Call of Duty, FIFA, Rocket League, Halo, and much more.<br>
            We strive to bring you free content that will always be available as well as paid content which will have great rewards.<br>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
            <div class="game_box"></div>
        </div>
    </div>
@stop

@section('js')
	<script type="text/javascript" src="/js/home.js"></script>
@stop