@extends('app')
@section('content')

    <div class="container">
        <h3>Editando Produto: {{$products->name}}</h3>

        {{--Puxa dos erros _check--}}
        @include('errors._check')

        <!-- Para trazer os campos já preenchidos-->
       {!! Form::model($products, ['route'=>['admin.products.update', $products->id]]) !!}

        {{--Puxa os dados do _form--}}
        @include('admin.products._form')

        <div class="form-group">
            {!! Form::submit('Salvar produto',['class'=>'btn btn-primary']) !!}
        </div>

       {!! Form::close() !!}

    </div>
@endsection