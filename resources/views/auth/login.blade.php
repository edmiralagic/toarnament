@extends('app')
@section('content')
    <div class="container" id="second--container">
        <div class="section">
        	<div class="form__container">
				<div class="form__title">Login to your Toarnament account</div>
		     	<form action="home.index" method="POST" required>
					<input type="text" id="name" name="username" placeholder="Username*"required/>
					<input type="password" id="passwordtwo" name="password" placeholder="Password*" required/>
					<input class="button" type="submit"/>
				</form>
			</div>
        </div>
     </div>
@stop

@section('js')
	<script type="text/javascript" src="/js/register.js"></script>
@stop