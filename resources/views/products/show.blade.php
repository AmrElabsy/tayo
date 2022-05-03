@extends("layouts.app")

@section("styles")
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/owlcarousel.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/slick-theme.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/slick.css") }}">
@endsection

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Product Page</h3>
			</div>
			<div class="col-12 col-sm-6">
				<span class="breadcrumb">
					<button class="btn btn-primary m-r-20" type="button" data-bs-toggle="modal"
							data-bs-target=".bd-example-modal-lg">Edit Product
					</button>
				<form method="post" action="{{ route("product.destroy", $product) }}" style="display: inline">
					@csrf
					@method("DELETE")
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add new Product</h4>
								<button class="btn-close" type="button" data-bs-dismiss="modal"
										aria-label="Close"></button>
							</div>
							<div style="text-align: left" class="modal-body">
								<form class="form theme-form" method="post" enctype="multipart/form-data"
									  action="{{ route("product.update", $product) }}">
									@csrf
									@method("PUT")
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product Images</label>
												<input class="form-control" type="file" multiple name="images[]">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product Name</label>
												<input class="form-control" type="text" value="{{ $product->name }}"
													   name="name">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product pieces number</label>
												<input class="form-control" type="number" name="amount"
													   value="{{ $product->amount }}">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product Price</label>
												<input class="form-control" type="number" value="{{ $product->price }}"
													   name="price">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label" for="exampleFormControlTextarea4">Product
													Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea4"
														  name="description"
												<textarea class="form-control" id="exampleFormControlTextarea4"
														  name="description"
														  rows="3">{{ $product->description }}</textarea>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close
										</button>
										<button class="btn btn-primary" type="submit">Save</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				</span>
			</div>
		</div>
	</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div>
			<div class="row product-page-main p-0">
				<div class="col-xl-5 col-md-6 box-col-6 xl-50">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-9 box-col-7 product-main">
									<div class="pro-slide-single">
										@foreach($product->images as $image)
											<div><img class="img-fluid" src="{{ asset("storage/" . $image->path ) }}"
													  alt=""></div>
										@endforeach
									</div>
								</div>
								<div class="col-xl-3 box-col-4 product-thumbnail">
									<div class="pro-slide-right">
										@foreach($product->images as $image)
											<div>
												<div class="slide-box"><img src="{{ asset("storage/" . $image->path) }}"
																			alt=""></div>
											</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">
					<div class="card">
						<div class="card-body">
							<div class="pro-group pt-0 border-0">
								<div class="product-page-details mt-0">
									<h3>{{ $product->name }}</h3>
								</div>
								<div class="product-price">{{ $product->price }} Point</div>
							</div>
							<div class="pro-group">
								<p>{{ $product->description }}</p>
							</div>
							<div class="pro-group">
								<div class="row">
									<div class="col-md-6">
										<table>
											<tbody>
											<tr>
												<td><b>Availability: </b></td>
												@if($product->amount)
													<td class="txt-success">In stock</td>
												@else
													<td class="txt-danger">Out of stock</td>
												@endif
											</tr>
											<tr>
												<td><b>Number: </b></td>
												<td>{{ $product->amount }}</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection

		@section("scripts")
			<script src="{{ asset("assets/js/ecommerce.js") }}"></script>
			<script src="{{ asset("assets/js/sidebar-menu.js") }}"></script>
			<script src="{{ asset("assets/js/rating/jquery.barrating.js") }}"></script>
			<script src="{{ asset("assets/js/rating/rating-script.js") }}"></script>
			<script src="{{ asset("assets/js/owlcarousel/owl.carousel.js") }}"></script>
			<script src="{{ asset("assets/js/slick-slider/slick.min.js") }}"></script>
			<script src="{{ asset("assets/js/slick-slider/slick-theme.js") }}"></script>
@endsection
