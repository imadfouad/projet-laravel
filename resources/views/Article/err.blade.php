@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h2 >Vous n'avez pas le droit d'accès à cette page !</h2>
			<a class="btn btn-info" href="{{ url('articles') }}">Retournez vers la page des articles</a>
		</div>
	</div>
</div>




@endsection