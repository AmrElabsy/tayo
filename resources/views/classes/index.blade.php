@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Student Classes</h3>
			</div>
			<div class="col-12 col-sm-6">
				<div class="breadcrumb">
					<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-modal">Add Class</button>
					<div class="modal fade bd-example-modal-lg" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Add new Class</h4>
									<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div style="text-align: left" class="modal-body">
									<form class="form theme-form" method="post" action="{{ route("class.store") }}" enctype="multipart/form-data">
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
													<input class="form-control" type="text" name="name" value="{{ old("name") }}">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Class Admin</label>
													<select class="form-control" type="text" name="admin">
														@foreach($admins as $admin)
															<option value="{{ $admin->id }}">{{ $admin->name }}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Class small description</label>
													<input class="form-control" type="text" name="description" value="{{ old("description") }}">
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
								<img class="img-fluid sm-100-w" src="{{ asset("storage/" . $class->image) }}" alt=""
									  onerror="this.onerror=null;this.src='https://placeimg.com/300/300/arch';">
							</div>
							<div class="col-xl-7 col-12">
								<div class="blog-details pt-1">
									<div class="blog-date">
										<span>{{ $class->day_created }}</span> {{ $class->month_created }} {{ $class->year_created }}</div>
									<a href="{{ route("class.show", $class->id) }}">
										<h6>{{ $class->name }}</h6>
									</a>
									<div class="blog-bottom-content">
										<ul class="blog-social">
											<li>by: {{ $class->admin?->name }}</li>
											<li>{{ sizeof( $class->students ) }} Student</li>
										</ul>
										<hr>
										<p class="mt-0">{{ $class->description }}</p>
										<div class="card-footer row">
											<div class="col-6 col-sm-6">
												<button style="width: 100%" class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#edit-modal-{{ $class->id }}">Edit
												</button>
												<div class="modal fade" id="edit-modal-{{ $class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-lg">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Edit Class</h4>
																<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
															</div>
															<div style="text-align: left" class="modal-body">
																<form class="form theme-form" action="{{ route("class.update", $class->id) }}" enctype="multipart/form-data" method="post">
																	@csrf
																	@method("PUT")
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
																				<input class="form-control" type="text" name="name" value="{{ $class->name }}">
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div>
																				<label class="form-label">Class Admin</label>
																				<select class="form-control" type="text" name="admin">
																					@foreach($admins as $admin)
																						<option value="{{ $admin->id }}" @if($class->admin?->id == $admin->id) selected @endif>
																							{{ $admin->name }}
																						</option>
																					@endforeach
																				</select>
																			</div>
																		</div>
																	</div>
																	<div class="row mb-3">
																		<div class="col">
																			<div>
																				<label class="form-label">Class small description</label>
																				<input class="form-control" type="text" name="description" value="{{ $class->description }}">
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close</button>
																		<button class="btn btn-primary" type="submit">Save</button>
																	</div>
																</form>
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