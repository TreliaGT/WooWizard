@extends('layout.app')

@section('content')
   <h1 style="color:white;font-weight:bold;">Create Product :</h1>
   <div style="background-color: rgba(255,255,255, 0.5);border-radius: 4px;padding: 10px 20px;margin-bottom:5px;">
     
   
    <form action="/products/create" method="POST"  enctype='multipart/form-data' files='true'>
    {!! csrf_field() !!}
        <div class="form-group">
                <label style="font-weight:bold;">Name :</label>
                <input name="name" class="form-control" type="text"  placeholder="Name">
        </div>
         <div class="form-group">
                <label style="font-weight:bold;">Price :</label>
                <input name="price" class="form-control" type="text"  placeholder="Price">
        </div>
        <div class="form-group">
                <label style="font-weight:bold;">Description :</label>
                <textarea name="description">Description</textarea>
        </div>
        <div class="form-group">
        <label style="font-weight:bold;">On Sale :</label>
           <select name="on_sale">
            <option value="false">No</option>
            <option value="true">Yes</option>
           </select>
        </div>
        <div class="form-group">
            <label style="font-weight:bold;">Sale Price :</label>
            <input name="sale_price" class="form-control" type="text"  placeholder="Sale Price">
        </div>
        <div class="form-group">
        <label style="font-weight:bold;">Stock Status :</label>
           <select name="stock_status">
           <option value="instock">instock</option>
           <option value="outofstock">outofstock</option>
           </select>
        </div>
        <div class="form-group">
        <label style="font-weight:bold;">catergoies :</label>
           <select name="categories">
            <option value="True">instock</option>
            <option value="False">outofstock</option>
           </select>
        </div>
        <div class="form-group">
            <label style="font-weight:bold;">Feature Image :</label>
            <input type="file" name="image"/>
        </div>
        <button type=submit>Add</button>
    </form>
@endsection