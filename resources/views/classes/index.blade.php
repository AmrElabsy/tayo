@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Student Classes</h3>
			</div>
			<div class="col-12 col-sm-6">
				<div class="breadcrumb">
					<button class="btn btn-primary" type="button" data-bs-toggle="modal"
							data-bs-target=".bd-example-modal-lg">Add Class
					</button>

					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Add new Class</h4>
									<button class="btn-close" type="button" data-bs-dismiss="modal"
											aria-label="Close"></button>
								</div>
								<div style="text-align: left" class="modal-body">
									<form class="form theme-form" method="post" action="{{ route("class.store") }}"
										  enctype="multipart/form-data">
										@csrf
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Class Image</label>
													<input class="form-control" type="file" name="image">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Class Name</label>
													<input class="form-control" type="text" name="name">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Class small description</label>
													<input class="form-control" type="text" name="description">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close
											</button>
											<button class="btn btn-primary" type="submit">Add</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row learning-block">
		<div class="row">
			@foreach($classes as $class)
				<div class="col-xl-6 col-sm-12">
					<div class="card">
						<div class="blog-box blog-list row">
							<div class="col-xl-5 col-12">
								<img class="img-fluid sm-100-w" src="{{ asset("assets/images/faq/1.jpg") }}" alt="">
							</div>
							<div class="col-xl-7 col-12">
								<div class="blog-details pt-1">
									<div class="blog-date"><span>05</span> January 2023</div>
									<a href="{{ route("class.show", $class->id) }}">
										<h6>{{ $class->name }}</h6>
									</a>
									<div class="blog-bottom-content">
										<ul class="blog-social">
											<li>by: {{ $class->admin?->user->name }}</li>
											<li>{{ sizeof( $class->students ) }} Student</li>
										</ul>
										<hr>
										<p class="mt-0">{{ $class->description }}</p>
										<div class="card-footer row">
											<div class="col-6 col-sm-6">
												<button style="width: 100%" class="btn btn-primary" type="button"
														data-bs-toggle="modal" data-original-title="test"
														data-bs-target="#exampleModal">Edit
												</button>
												<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
													 aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Edit Class</h4>
																<button class="btn-close" type="button"
																		data-bs-dismiss="modal"
																		aria-label="Close"></button>
															</div>
															<div style="text-align: left" class="modal-body">
																<form class="form theme-form">
																	<div class="row mb-3">
																		<div class="col">
																			<div>
																				<label class="form-label">Class
																					Image</label>
																				<input class="form-control" type="file">
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div>
																				<label class="form-label">Class
																					Name</label>
																				<input class="form-control" type="text">
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div>
																				<label class="form-label">Class small
																					description</label>
																				<input class="form-control" type="text">
																			</div>
																		</div>
																	</div>
																</form>
															</div>
															<div class="modal-footer">
																<button class="btn btn-danger" type="button"
																		data-bs-dismiss="modal">Close
																</button>
																<button class="btn btn-primary" type="button">Save
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-6 col-sm-6">
												<button style="width: 100%" class="btn btn-danger">Delete</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection