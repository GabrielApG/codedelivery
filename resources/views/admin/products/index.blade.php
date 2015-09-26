@extends('app')

@section('content')

    <div class="container">
        <h3>Products</h3>

        <a href="{{route('admin.products.create')}}" class="btn btn-default">Novo Produto</a>
        <br><br>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>DESCRIÇÃO</th>
                <th>CATEGORIA</th>
                <th>PRICE</th>
                <th>AÇÕES</th>
            </tr>
            <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    <a href="{{route('admin.products.edit',['id'=>$product->id])}}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{route('admin.products.destroy',['id'=>$product->id])}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                </td>
            </tr>
            @endforeach
            </tbody>
            </thead>
        </table>

        {!! $products->render() !!}
    </div>






@endsection