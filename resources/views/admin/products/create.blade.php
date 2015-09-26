@extends('app')

@section('content')

    <div class="container">
        <h3>Novo Produto</h3>

        {{--Puxa dos erros _check--}}
        @include('errors._check')

       {!! Form::open(['route'=>'admin.products.store']) !!}

        {{--Puxa os dados do _form--}}
        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Criar Produto',['class'=>'btn btn-primary']) !!}
        </div>

       {!! Form::close() !!}

    </div>
@endsection