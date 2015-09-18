@extends('app')

@section('content')

    <div class="container">
        <h3>Nova Categoria</h3>

        {{--Puxa dos erros _check--}}
        @include('errors._check')

       {!! Form::open(['route'=>'admin.categories.store']) !!}

        {{--Puxa os dados do _form--}}
        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
        </div>

       {!! Form::close() !!}

    </div>
@endsection