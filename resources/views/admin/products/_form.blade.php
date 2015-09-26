
<div class="form-group">
    {!! Form::label('Category','Categorias:') !!}
    {!! Form::select('category_id',$categories, null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Name','Nome:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Name','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Price','Price:') !!}
    {!! Form::text('price',null,['class'=>'form-control']) !!}
</div>