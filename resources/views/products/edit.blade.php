@extends('layouts.app')

@section('content')
   <h1 style="color:white;font-weight:bold;">Modifier Produit :</h1>
   <div style="background-color: rgba(255,255,255, 0.5);border-radius: 4px;padding: 10px 20px;margin-bottom:5px;">
   {!! Form::open(['action' => ['ProductsController@update', $product->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Nom :', ['style' => 'color:black;'])}}
            {{Form::text('name', $product->name , ['class' => 'form-control', 'placeholder' => 'Nom'])}}
        </div>
        <div class="form-group">
            {{Form::label('price', 'Prix :', ['style' => 'color:black;'])}}
            {{Form::text('price', $product->price , ['class' => 'form-control', 'placeholder' => 'Prix'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description :', ['style' => 'color:black;'])}}
            {{Form::text('description', $product->description , ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('on_sale', 'En solde :' ,['style' => 'color:black;'])}}
            {{Form::select('on_sale', array(true=> 'Oui', false =>'Non'), false)}}
        </div>
        <div class="form-group">
            {{Form::label('sale_price', 'Prix après solde :', ['style' => 'color:black;'])}}
            {{Form::text('sale_price', $product->sale_price , ['class' => 'form-control', 'placeholder' => 'Prix'])}}
        </div>
        <div class="form-group">
            {{Form::label('stock_status', 'En stock :' ,['style' => 'color:black;'])}}
            {{Form::select('stock_status', array('instock'=> 'Oui', 'outofstock' =>'Non'), 'outofstock')}}
        </div>
        <div class="form-group">
            {{Form::label('categorie', 'Catégorie :' ,['style' => 'color:black;'])}}
            {{Form::select('categories', array('Clothing'=> 'Clothing', 'Accessories' =>'Accessories', 'Hoodies' => 'Hoodies', 'Tshirts' => 'Tshirts', 'Decor' =>'Decor', 'Music' => 'Music', 'Uncategorized' => 'Uncategorized', 'Food' => 'Food'))}}
        </div>
        <div class="form-group">
            {{Form::label('image', 'Image :' ,['style' => 'color:black;'])}}
            {{Form::file('image')}}
        </div>
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection