@extends('app')

@section('content')

    <div class="container">
        <h3>Editando Categoria: {{$category->name}}</h3>

        {{--Puxa dos erros _check--}}
        @include('errors._check')


        <!-- Para trazer os campos já preenchidos-->
       {!! Form::model($category, ['route'=>['admin.categories.update', $category->id]]) !!}

        {{--Puxa os dados do _form--}}
        @include('admin.categories._form')

        <div class="form-group">
            {!! Form::submit('Salvar Categoria',['class'=>'btn btn-primary']) !!}
        </div>

       {!! Form::close() !!}

    </div>
@endsection