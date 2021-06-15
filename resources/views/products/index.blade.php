@extends('layout.app')
@section('content')
		<a href="/products/create"> Create New Product</a>
		<a href="/cate"> View Categories</a>
        @if(count($products) > 0)
		<div class="container">
			<div>
				<table style="border-width:thick;" class='table table-bordered'>
					<thead>
						<tr>
							<th></th>
                            <th>Title</th>
                            <th>Product price</th>
							<th>Creation date</th>
							<th>Category</th>
							<th>Sale</th>
							<th>Stock</th>
							<th>Actions</th>
							<th>Actions</th>
                        </tr>
                    </thead>
					<tbody>
    	    	<?php foreach ($products as $product) { ?>
					<tr>
			    	    <a href="/products/{{$product->id}}">
						</a>
						@if($product->images!=null)
						<td><img src={{$product->images[0]->src}} width="50" height="50"/>
						@else
						<td></td>
						@endif
						<td><?= $product->name ?></td>
			    	    <td>$<?= $product->regular_price ?></td>
						<td><?= $product->date_created ?></td>
						<td><?= $product->categories[0]->name ?></td>
						@if($product->on_sale=='true')
						<td>$<?= $product->sale_price ?></td>
						@else
				        <td>Not on sale</td>
						@endif
						<td><?= $product->stock_status ?></td>
		    	    	<td>
							<a href="/products/{{$product->id}}/edit" class="btn btn-success">Modifier</a>
				        </td>
						<td>
							<form action='/product/destory/{{$product->id}}'>
							{!! csrf_field() !!}
							<button class=" btn-danger btn">Delete</button>
							</form>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
	@else
		<span>No Products Listed</span>			

        @endif        
@endsection