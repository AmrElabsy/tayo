@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Products</h3>
			</div>
			<div class="col-12 col-sm-6">
				<p class="breadcrumb">
					<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-modal">Add Product</button>

				<div class="modal fade bd-example-modal-lg" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add new Product</h4>
								<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div style="text-align: left" class="modal-body">
								<form class="form theme-form" method="post" action="{{ route("product.store") }}" enctype="multipart/form-data">
									@csrf
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
												<input class="form-control" type="text" name="name">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product pieces number</label>
												<input class="form-control" type="number" name="amount">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Product Price</label>
												<input class="form-control" type="number" name="price">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label" for="exampleFormControlTextarea4">Product Description</label>
												<textarea class="form-control" id="exampleFormControlTextarea4" rows="3" name="description"></textarea>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
										<button class="btn btn-primary" type="submit">Add</button>
									</div>
								</form>
							</div>

						</div>
					</div>
				</div>
				</p>
			</div>
		</div>
		<div class="row">
			@foreach($products as $product)
			<div class="col-xl-3 col-sm-12 xl-3">
				<div class="card">
					<div class="product-box">
						<div class="product-img"><img class="img-fluid" src="{{ asset("storage/" . $product->images()->first()->path) }}" alt="" onerror="this.onerror=null;this.src='https://placeimg.com/300/300/arch';"></div>
						<div class="product-details">
							<a href="{{ route("product.show", $product->id) }}"><h4>{{ $product->name }}</h4></a>
							<p>{{ $product->amount }} piece</p>
							<div class="product-price">{{ $product->price }} Point</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
@endsection