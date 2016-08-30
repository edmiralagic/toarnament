@extends('app')
@section('content')
	<div class="container background--lightgrey">
		<div class="section">
			<div class="form__desc">
				<img src=" {{ asset('img/membership.svg')  }} "/>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="section">
			<div class="form__container">
				<div class="form__title">Get started now</div>
		     	<form action="home.index" method="POST" required>
					<input type="text" id="name" name="username" placeholder="Username*"required/>
					<input type="password" id="passwordtwo" name="password" placeholder="Password*" required/>
					<input type="password" id="passwordtwo" name="password" placeholder="Repeat Password*" required/>
					<input type="email" id="email" name="email" placeholder="Email*" required/>
					<input class="button" type="submit"/>
				</form>
			</div>
		</div>
     </div>
@stop
@section('js')
	<script type="text/javascript" src="/js/register.js"></script>
@stop