@extends('layouts.app')


@section('content')

<div class="container">


    <section>
    <h3><u>Online Shop</u></h3>
    <div class="gallery">
    @foreach ($product_list as $product)
		<article>
			<h3>{{$product->name}}</h3>
      <strong>Price: {{$product->price}} €</strong>
			<div><img src="storage/{{ $product->image_url }}"></div>
      <nav><a href="{{ url('/product_view/'. $product->id) }}" title="Product View" target="blank">View</a></nav>
		</article>

     @endforeach
     <hr>
    </div>
    @if (Auth::check() && !$shoppingCarts->isEmpty())
      <div class="form-group">
    		<em><a class="viewCartButton" style="width:100%;" href="{{ url('/shoppingCart/'.$shoppingCarts[0]->id)}}">View Shopping Cart ( {{$total_products}} )</a></em>
      </div>
    @endif
  <script src="{{ asset('js/product_view_logic.js') }}" type="text/javascript"></script>
  </section>
</div>
@endsection
