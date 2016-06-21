@extends('store.template')

@section('content')
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li>
							<a href="{{ route('home') }}">Pagina Principal</a>
						</li>
						<li>
							<a href="#">Categoria</a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">Subcategoria</a> <span class="divider">/</span>
						</li>
						<li class="active">
							Data
						</li>
					</ul>
					<div class="informacion_producto">
						<div class="col-md-12">
							<h3>
								Información del Producto
								<br/>
							</h3>
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="izq_producto">	
							<img alt="{{ $product->name }}" src="{{ $product->image1 }}" class="img-responsive" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="der_producto">
								<div class="col-md-12">
									<h4 class="text-left">
										{{ $product->name }}
									</h4>
									<hr>
								</div>
							</div>
							<div class="marcaymodelo">
								<div class="col-md-12">
									<b>Modelo: </b>{{ $product->sku }}<br/><br/>
									<b>Marca: </b>{{ $product->brand }}<br/>
								</div>
							</div>
							<div class="preciosyexistencias">
								<div class="col-md-6">
									<div class="existencia">
										<div class="col-md-12">
										<p class="text-center">
										<br/>
 									@if ($product->quantity === 0)
									<a href="#" class="btn btn-danger btn-lg disabled" role="button"><b>Existencia:</b>  {{ $product->quantity }}</a>
									@elseif ($product->quantity <= 10)
									<a href="#" class="btn btn-warning btn-lg disabled" role="button"><b>Existencia:</b> {{ $product->quantity }}</a>
									@elseif ($product->quantity > 10)
									<a href="#" class="btn btn-primary btn-lg disabled" role="button"><b>Existencia:</b> {{ $product->quantity }}</a>
									@endif
				


									<br>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
										<p>
							@if (count($product->price_offer) === 1)
							Precio: $ {{ number_format($product->price,2) }} {{ $product->badge }} <br><br>
							Precio Oferta: <h3>$ {{ number_format($product->price_offer,2) }} {{ $product->badge }} </h3>
							@else
							Precio: $ {{ number_format($product->price,2) }} {{ $product->badge }} 
							@endif 
							</p>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="row">
										<div class="col-md-12">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-12">
									<p>
										Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-12">
									<table class="table">
										<thead>
											<tr>
												<th>
													#
												</th>
												<th>
													Product
												</th>
												<th>
													Payment Taken
												</th>
												<th>
													Status
												</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td>
													TB - Monthly
												</td>
												<td>
													01/04/2012
												</td>
												<td>
													Default
												</td>
											</tr>
											<tr class="active">
												<td>
													1
												</td>
												<td>
													TB - Monthly
												</td>
												<td>
													01/04/2012
												</td>
												<td>
													Approved
												</td>
											</tr>
											<tr class="success">
												<td>
													2
												</td>
												<td>
													TB - Monthly
												</td>
												<td>
													02/04/2012
												</td>
												<td>
													Declined
												</td>
											</tr>
											<tr class="warning">
												<td>
													3
												</td>
												<td>
													TB - Monthly
												</td>
												<td>
													03/04/2012
												</td>
												<td>
													Pending
												</td>
											</tr>
											<tr class="danger">
												<td>
													4
												</td>
												<td>
													TB - Monthly
												</td>
												<td>
													04/04/2012
												</td>
												<td>
													Call in to confirm
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>

@stop