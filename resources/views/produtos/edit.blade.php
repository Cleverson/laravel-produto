@extends('layouts.app')
	@section('content')
		<div class="container">
			<h1>Editando Produto: {{ $produto->name }}</h1>
			@if ($errors->any())
				<ul class="alert alert-warning">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>

			@endif
		</div>
	@endsection
