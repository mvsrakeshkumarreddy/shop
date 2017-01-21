



	@foreach($products as $product)
		<h2>{{$product->id}}</h2>
		<h1>{{$product->name}}</h1>

		<h3>{{$product->price}}</h3>
		<br />
	@endforeach
