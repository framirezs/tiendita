<div class="container-fluid products">
	<div class="col-md-2">
	</div>
	<div class="product col-md-10">
			@foreach($products as $product)
			@if ($product->visible)
			  <div class="col-sm-6 col-md-3">
    	<div class="thumbnail">
			<a href="#"></a>
				<div class="product-info">
					<div class="imagen-producto">
						<a href="{{ route('product-detail', $product->slug) }}">
						<img src="{{ $product->image1 }}" alt="{{ $product->sku }} border="0" height="160" width="160"></a>
					</div>
					<div class="titulo-producto">
						<a href="{{ route('product-detail', $product->slug) }}">
						<p>{{ $product->name }}</p></a>
					</div>
					<div class="modelo-producto">
						<a href="{{ route('product-detail', $product->slug) }}">{{ $product->sku }}</a>
					</div>
					<div class="marca-producto">
					<span>{{$product->brand}}</span>
					</div>
					<div class="existencia">
						@if ($product->quantity === 0)
								<a href="#" class="btn btn-danger btn-lg disabled btn-xs" role="button"><b>Existencia:</b>  {{ $product->quantity }}</a>
								@elseif ($product->quantity <= 10)
								<a href="#" class="btn btn-warning btn-lg disabled btn-xs" role="button"><b>Existencia:</b> {{ $product->quantity }}</a>
								@elseif ($product->quantity > 10)
								<a href="#" class="btn btn-primary btn-lg disabled btn-xs" role="button"><b>Existencia:</b> {{ $product->quantity }}</a>
						@endif					
					</div>
					<div class="precios">

						@if ($product->price_offer)
						<div class="precio_normal">Precio: $ {{ number_format($product->price,2) }} {{ $product->badge }}
						</div> 
						<div class="precio_oferta">Oferta: $ {{ number_format($product->price_offer,2) }} {{ $product->badge }}
						</div>
						@else
						<div class="precio_normal">Precio: $ {{ number_format($product->price,2) }} {{ $product->badge }}
						</div> 
						<br/>
						@endif
					<!-- Convercion de Precios -->
						@if ($product->badge === MXN)
						 Hola
						
						<br/>
						@endif



					</div>
					<div class="producto-cantidadSmall">
					<form action="action_page.php">
					  Cantidad:
						<input type="number" name="points" style="WIDTH: 80px; min-height" size=32 min="0" max= "{{ $product->quantity }}" step="1" value="1"><br/>
						<input type="button" class="btn btn-success" value="Agregar a mi pedido">	
					</form>
					</div>
				</div>
			@endif
					</div></div>
		@endforeach

	</div>
	</div>
	</div>
