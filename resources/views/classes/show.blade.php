@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Class Users</h3>
			</div>
			@if($errors->any())
				{{ implode('', $errors->all('<div>:message</div>')) }}
			@endif
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
													<input class="form-control" type="text" name="name">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Father Name</label>
													<input class="form-control" type="text" name="father_name">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Mother Name</label>
													<input class="form-control" type="text" name="mother_name">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Profile Email</label>
													<input class="form-control" type="email" name="email">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Phone Number</label>
													<input class="form-control" type="text" name="phone">
												</div>
											</div>
										</div>
										<div class="row mb-3">
											<div class="col">
												<div>
													<label class="form-label">Address</label>
													<input class="form-control" type="text" name="address">
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
													<input class="form-control" type="password" name="password">
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
													   alt="">
						</div>
						<div class="text-center profile-details"><a href="{{ route("student.show", $student->id) }}">
								<h4>{{ $student->user->name }}</h4></a>
							<h6>Student</h6>
						</div>
						<div class="card-footer row">
							<div class="col-6 col-sm-6">
								<button style="width: 100%" class="btn btn-primary" type="button" data-bs-toggle="modal"
										data-original-title="test" data-bs-target="#exampleModal">Edit
								</button>
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
									 aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Edit Profile</h4>
												<button class="btn-close" type="button" data-bs-dismiss="modal"
														aria-label="Close"></button>
											</div>
											<div style="text-align: left" class="modal-body">
												<form class="form theme-form">
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Images</label>
																<input class="form-control" type="file">
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Name</label>
																<input class="form-control" type="text">
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile Username</label>
																<input class="form-control" type="text">
															</div>
														</div>
													</div>
													<div class="row mb-3">
														<div class="col">
															<div>
																<label class="form-label">Profile password</label>
																<input class="form-control" type="password">
															</div>
														</div>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button class="btn btn-danger" type="button" data-bs-dismiss="modal">
													Close
												</button>
												<button class="btn btn-primary" type="button">Save</button>
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
			@endforeach
		</div>
	</div>
	<!-- footer start-->

@endsection