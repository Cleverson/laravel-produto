@extends('layouts.app')
@section('content')
  <div class="container">
    <h1>Novo Produto</h1>
    @if ($errors->any())
		<ul class="alert alert-warning">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
    {!! Form::open(['url' => 'produtos/store']) !!}
    <div class="form-group">
    	{!! Form::label('nome', 'Nome') !!}
    	{!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('descricao', 'Descrição') !!}
    	{!! Form::text('descricao', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        <label for="categoria_id" class="control-block">Categoria:</label>
        <select class="form-control" name="categoria_id">
          @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
          @endforeach
        </select>
    </div>
    
    <div class="form-group">
		{!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
  	</div>
    {!! Form::close() !!}
  </div>

@endsection
