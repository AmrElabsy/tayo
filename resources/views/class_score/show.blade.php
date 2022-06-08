@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Class Score</h3>
			</div>
		</div>
	</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="user-profile">
			<div class="row">
				<div class="col-sm-12">
					<div class="card">
						<div class="card-header">
							<div class="row">
								<div class="col-12 col-sm-6">
									<h3 style="text-align: left">Score Categories</h3>
								</div>
								<div class="col-12 col-sm-6">
									<p class="breadcrumb">
										<button style="width: 100%" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#add-modal">Add Category</button>
									<div class="modal fade bd-example-modal-lg" id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title">Add new Category</h4>
													<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div style="text-align: left" class="modal-body">
													<form class="form theme-form" action="{{ route("category.store") }}" method="post">
														@csrf
														<input type="hidden" value="{{ $class->id }}" name="tayo_class_id">
														<div class="row mb-3">
															<div class="col">
																<div>
																	<label class="form-label">Category Name</label>
																	<input class="form-control" type="text" name="name" value="{{ old("name") }}">
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col">
																<div>
																	<label class="form-label">Category Points</label>
																	<input class="form-control" type="number" name="points" value="{{ old("points") }}">
																</div>
															</div>
														</div>
														<div class="row mb-3">
															<div class="col">
																<div>
																	<label class="form-label">Category Time</label>
																	<select class="form-control btn-square"
																			name="time">
																		<option value="0">Select One Value Only
																		</option>
																		<option value="1">1 Week</option>
																		<option value="2">2 Week</option>
																		<option value="3">3 Week</option>
																		<option value="4">1 Month</option>
																	</select>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<button class="btn btn-danger" type="button"
																	data-bs-dismiss="modal">Close
															</button>
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
						</div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table style="overflow: hidden" class="table table-styling">
										<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Category Name</th>
											<th scope="col">Points</th>
											<th scope="col">Time</th>
											<th scope="col">Action</th>
										</tr>
										</thead>
										<tbody>
										@foreach($class->categories as $i => $category)
										<tr>
											<th scope="row">{{ $i+1 }}</th>
											<td>{{ $category->name }}</td>
											<td>{{ $category->points }} Coins</td>
											<td>{{ $category->time }} week</td>
											<td>
												<div class="row">
													<div class="col-6 col-sm-6">
														<button style="width: 100%" class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#edit-modal-{{ $category->id }}">Edit</button>
														<div class="modal fade" id="edit-modal-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg">
																<div class="modal-content">
																	<div class="modal-header">
																		<h4 class="modal-title">Edit Category</h4>
																		<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																	<div style="text-align: left" class="modal-body">
																		<form class="form theme-form" method="post" action="{{ route("category.update", $category) }}">
																			@csrf
																			@method("PUT")
																			<div class="row mb-3">
																				<div class="col">
																					<div>
																						<label class="form-label">Category Name</label>
																						<input class="form-control" type="text" name="name" value="{{ $category->name }}">
																					</div>
																				</div>
																			</div>
																			<div class="row mb-3">
																				<div class="col">
																					<div>
																						<label class="form-label">Category Points</label>
																						<input class="form-control" type="number" name="points" value="{{ $category->points }}">
																					</div>
																				</div>
																			</div>
																			<div class="row mb-3">
																				<div class="col">
																					<div>
																						<label class="form-label">Category Time</label>
																						<select class="form-control btn-square" name="time">
																							<option value="0">Select One Value Only</option>
																							<option value="1">1 Week</option>
																							<option value="2">2 Week</option>
																							<option value="3">3 Week</option>
																							<option value="4">1 Month</option>
																						</select>
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
														<form action="{{ route("category.destroy", $category) }}" method="post">
															@csrf
															@method("delete")
															<button type="submit" style="width: 100%" class="btn btn-danger">Delete</button>
														</form>
													</div>
												</div>
											</td>
										</tr>
										@endforeach
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
	<!-- Container-fluid Ends-->
	<div class="container-fluid">
		<!-- Table Row Starts-->
		<form class="row" method="post" action="{{ route("students.score") }}">
		@csrf
			<!-- CHECKBOXES Row Starts-->
			@foreach($class->students as $student)
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<h5 style="text-align: left">
							<div style="display: inline-block" class="avatar">
								<img class="img-50 rounded-circle" src="{{ asset("storage/" . $student->image) }}" alt="#">
							</div>
							{{ $student->name }}
						</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered checkbox-td-width">
										<tbody>
											@foreach($class->categories as $category)
												<tr>
													<td>{{ $category->name }}</td>
													<td>{{ $category->time }} Week</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" name="{{ $student->id }}" value="{{ $category->id }}" onchange="handleChange(this);">
													</td>
													<td><span>{{ $category->points }} Coins</span></td>
												</tr>
											@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit">Save</button>
				</div>
			<input type="hidden" name="added" id="added" value="{}">
			<input type="hidden" name="removed" id="removed" value="{}">
			</form>
		</div>

	<script>
		function handleChange(input){
			var value = $(input).val();
			var name = $(input).attr("name");
			var isChecked = $(input).is(":checked");
			if (isChecked) {
				if (inRemoved(name, value)) {
					removeFromRemoved(name, value);
				} else {
					addToAdded(name, value);
				}
			} else {
				if (inAdded(name, value)) {
					removeFromAdded(name, value);
				} else {
					addToRemoved(name, value);
				}
			}
		}

		function addToAdded(name, value) {
			let added = $("#added").val();
			added = JSON.parse(added);
			added[name] = value;
			added = JSON.stringify(added);
			$("#added").val(added);
		}

		addToAdded("ahmed", 3, 6);

		function addToRemoved(name, value) {
			var removed = $("#removed").val();
			removed = JSON.parse(removed);
			removed[name] = value;
			removed = JSON.stringify(removed);
			$("#removed").val(removed);
		}

		function removeFromAdded(name, value) {
			var added = $("#added").val();
			added = JSON.parse(added);
			delete added[name];
			added = JSON.stringify(added);
			$("#added").val(added);
		}

		function removeFromRemoved(name, value) {
			var removed = $("#removed").val();
			removed = JSON.parse(removed);
			delete removed[name];
			removed = JSON.stringify(removed);
			$("#removed").val(removed);
		}

		function inAdded(name, value) {
			var added = $("#added").val();
			added = JSON.parse(added);
			return added[name] === value;
		}

		function inRemoved(name, value) {
			var removed = $("#removed").val();
			removed = JSON.parse(removed);
			return removed[name] === value;
		}
	</script>
@endsection