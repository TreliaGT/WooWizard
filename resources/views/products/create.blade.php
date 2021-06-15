@extends('layout.app')

@section('content')
  
   <div class="container">
   <h1 >Create Product :</h1>
   
    <form action="/products" method="POST"  enctype='multipart/form-data' files='true'>
     @csrf
        <div class="form-group">
                <label class="form-label">Name :</label>
                <input name="name" class="form-control" type="text"  placeholder="Name">
        </div>
         <div class="form-group">
                <label class="form-label">Price :</label>
                <input name="price" class="form-control" type="text"  placeholder="Price">
        </div>
        <div class="form-group">
                <label class="form-label">Short Description :</label>
                <textarea name="shortdescription">Short Description</textarea>
        </div>
        <div class="form-group">
                <label class="form-label">Description :</label>
                <textarea name="description">Description</textarea>
        </div>
        <div class="form-group">
        <label class="form-label">Product Type :</label>
           <select name="type">
            <option value="simple">Single Product</option>
            <option value="variable">Variable Product</option>
           </select>
        </div>
        <div class="form-group">
        <label class="form-label">On Sale :</label>
           <select name="on_sale">
            <option value="false">No</option>
            <option value="true">Yes</option>
           </select>
        </div>
        <div class="form-group">
            <label class="form-label">Sale Price :</label>
            <input name="sale_price" class="form-control" type="text"  placeholder="Sale Price">
        </div>
        <div class="form-group">
        <label class="form-label">Stock Status :</label>
           <select name="stock_status">
           <option value="instock">instock</option>
           <option value="outofstock">outofstock</option>
           </select>
        </div>
        <div class="form-group">
        <label class="form-label">Categories :</label>
           <select name="categories">
            @foreach($cats as $cat)
               <option value="{{$cat->id}}">{{$cat->name}}</option>
               @endforeach
           </select>
        </div>
        <div class="form-group">
            <label class="form-label">Feature Image :</label>
            <input type="URL" name="image" placeholder="Image"/>
        </div>
        <button type=submit>Add</button>
    </form>
@endsection