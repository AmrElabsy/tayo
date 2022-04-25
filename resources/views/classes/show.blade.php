@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Class Users</h3>
			</div>
			<div class="col-12 col-sm-6">
				<div class="breadcrumb">
					<button class="btn btn-primary" type="button" data-bs-toggle="modal"
							data-bs-target=".bd-example-modal-lg">Add Profile
					</button>
					<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">Add Profile</h4>
									<button class="btn-close" type="button" data-bs-dismiss="modal"
											aria-label="Close"></button>
								</div>
								<div style="text-align: left" class="modal-body">
									<form class="form theme-form" method="post" action="{{ route("student.store")}}" enctype="multipart/form-data">
										@csrf
										<input type="hidden" name="class" value="{{ $tayoClass->id }}">
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile Images</label>
													<input class="form-control" type="file" name="image">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile Name</label>
													<input class="form-control" type="text" name="name" value="{{ old("name") }}" required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Father Name</label>
													<input class="form-control" type="text" name="father_name" value="{{ old("father_name") }}" required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Mother Name</label>
													<input class="form-control" type="text" name="mother_name" value="{{ old("mother_name") }}" required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile Email</label>
													<input class="form-control" type="email" name="email" value="{{ old("email") }}" required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Phone Number</label>
													<input class="form-control" type="text" name="phone" value="{{ old("phone") }}" required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Address</label>
													<input class="form-control" type="text" name="address" value="{{ old("address") }}"required>
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile ID</label>
													<input class="form-control" type="text" readonly name="identity" value="{{ $identity }}">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile password</label>
													<input class="form-control" type="password" name="password" required>
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

	<!-- Container-fluid starts-->
	<div class="container-fluid user-card">
		<div class="row">
			@foreach($tayoClass->students as $student)
				<div class="col-md-6 col-lg-6 col-xl-4 box-col-4">
					<div class="card custom-card">
						<div class="card-header"><img class="img-fluid" src="../assets/images/user-card/5.jpg" alt="">
						</div>
						<div class="card-profile"><img class="rounded-circle" src="{{ asset("storage/" . $student->user->image) }}"
													   alt=""
													   onerror="this.onerror=null;this.src='https://placeimg.com/300/300/people';">
						</div>
						<div class="text-center profile-details"><a href="{{ route("student.show", $student->id) }}" >
								<h4>{{ $student->user->name }}</h4></a>
							<h6>Student</h6>
						</div>
						<div class="card-footer row">
							<div class="col-6 col-sm-6">
								<button style="width: 100%" class="btn btn-primary" type="button" data-bs-toggle="modal"
										data-original-title="test" data-bs-target="#exampleModal-{{ $student->id }}">Edit
								</button>
								<div class="modal fade" id="exampleModal-{{ $student->id }}" tabindex="-1" role="dialog"
									 aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Edit Profile</h4>
												<button class="btn-close" type="button" data-bs-dismiss="modal"
														aria-label="Close"></button>
											</div>
											<div style="text-align: left" class="modal-body">
												<form class="form theme-form" method="post" action="{{ route("student.update", $student->id)}}" enctype="multipart/form-data">
													@csrf
													<input type="hidden" name="class" value="{{ $tayoClass->id }}">
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Images</label>
																<input class="form-control" type="file" name="image">
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Name</label>
																<input class="form-control" type="text" name="name" value="{{ old("name", $student->name) }}" required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Father Name</label>
																<input class="form-control" type="text" name="father_name" value="{{ old("father_name", $student->father_name) }}" required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Mother Name</label>
																<input class="form-control" type="text" name="mother_name" value="{{ old("mother_name", $student->mother_name) }}" required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Email</label>
																<input class="form-control" type="email" name="email" value="{{ old("email", $student->email) }}" required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Phone Number</label>
																<input class="form-control" type="text" name="phone" value="{{ old("phone", $student->phone) }}" required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Address</label>
																<input class="form-control" type="text" name="address" value="{{ old("address", $student->address) }}"required>
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile ID</label>
																<input class="form-control" type="text" readonly name="identity" value="{{ $student->identity }}">
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile password</label>
																<input class="form-control" type="password" name="password" required>
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
							<div class="col-6 col-sm-6">
								<form method="post" action="{{ route("student.destroy", $student->id) }}">
									@csrf
									@method("delete")
									<button style="width: 100%" type="submit" class="btn btn-danger">Delete</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
	<!-- footer start-->

	@if($errors->any())
		<script>
			// TODO: Show the Modal by default
			/**
			 * check the source of the request and show the corresponding modal
			 */
		</script>
	@endif
@endsection