@extends('app')

@section('content')

    <div class="container">
        <h3>Categorias</h3>

        <a href="{{route('admin.categories.create')}}" class="btn btn-default">Nova Categoria</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>AÇÃO</th>
            </tr>
            <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                <a href="{{route('admin.categories.edit',['id'=>$category->id])}}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </thead>
        </table>

        {!! $categories->render() !!}
    </div>






@endsection