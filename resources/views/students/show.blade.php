@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">User Profile</h3>
			</div>
			<div class="col-12 col-sm-6">

			</div>
		</div>
	</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="user-profile">
			<div class="row">
				<!-- user profile header start-->
				<div class="col-sm-12">
					<div class="card profile-header"><img class="img-fluid bg-img-cover" src="{{ asset("assets/images/user-card/5.jpg") }}" alt="">
{{--						<div class="profile-img-wrrap"><img class="img-fluid bg-img-cover" src="../assets/images/user-profile/bg-profsile.jpg" alt=""></div>--}}
						<div class="userpro-box">
							<div class="img-wrraper">
								<div class="avatar"><img class="img-fluid" alt="" src="{{ asset("storage/" . $student->image) }}"
														 onerror="this.onerror=null;this.src='https://placeimg.com/300/300/people';"></div>
							</div>
							<div class="user-designation">
								<div class="title"><a target="_blank" href="#">
										<h4>{{ $student->name }}</h4>
										<h6>{{ $student->tayoClass->name}}</h6></a>
								</div>
								<div class="follow">
									<ul class="follow-list">
										<li>
											<div class="follow-num counter">325</div><span>Coins</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-5 xl-35">
					<div class="default-according style-1 faq-accordion job-accordion">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<h5 class="p-0">
											<button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">About Student</button>
										</h5>
									</div>
									<div class="collapse show" id="collapseicon2" aria-labelledby="collapseicon2" data-parent="#accordion">
										<div style="text-align: left" class="card-body post-about">
											<ul>
												<li>
													<div class="icon"><i data-feather="briefcase"></i></div>
													<div>
														<h5>Full Name</h5>
														<p>{{ $student->name }}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="book"></i></div>
													<div>
														<h5>Father Name</h5>
														<p>{{ $student->father_name }}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="heart"></i></div>
													<div>
														<h5>Mother Name</h5>
														<p>{{ $student->mother_name }}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="map-pin"></i></div>
													<div>
														<h5>Email</h5>
														<p>{{ $student->email}}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="droplet"></i></div>
													<div>
														<h5>phone number</h5>
														<p>{{ $student->phone }}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="map-pin"></i></div>
													<div>
														<h5>Address</h5>
														<p>{{ $student->address }}</p>
													</div>
												</li>
												<li>
													<div class="icon"><i data-feather="droplet"></i></div>
													<div>
														<h5>ID</h5>
														<p>{{ $student->identity}}</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8 col-lg-12 col-md-7 xl-65">
					<div class="row">
						<!-- Target post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5 style="text-align: left">
										From <span>1/3/2022</span> - To <span>8/3/2022</span>
									</h5>
								</div>
								<div class="card-block row">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="table-responsive">
											<table class="table table-bordered checkbox-td-width">
												<tbody>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox">
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td style="text-align: center" colspan="3">
														total Score => 40 Coin
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Target post end-->
						<!-- Target post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5 style="text-align: left">
										From <span>1/3/2022</span> - To <span>8/3/2022</span>
									</h5>
								</div>
								<div class="card-block row">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="table-responsive">
											<table class="table table-bordered checkbox-td-width">
												<tbody>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox">
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td style="text-align: center" colspan="3">
														total Score => 40 Coin
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Target post end-->
						<!-- Target post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5 style="text-align: left">
										From <span>1/3/2022</span> - To <span>8/3/2022</span>
									</h5>
								</div>
								<div class="card-block row">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="table-responsive">
											<table class="table table-bordered checkbox-td-width">
												<tbody>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox">
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td style="text-align: center" colspan="3">
														total Score => 40 Coin
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Target post end-->
						<!-- Target post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5 style="text-align: left">
										From <span>1/3/2022</span> - To <span>8/3/2022</span>
									</h5>
								</div>
								<div class="card-block row">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="table-responsive">
											<table class="table table-bordered checkbox-td-width">
												<tbody>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox">
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td style="text-align: center" colspan="3">
														total Score => 40 Coin
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Target post end-->
						<!-- Target post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h5 style="text-align: left">
										From <span>1/3/2022</span> - To <span>8/3/2022</span>
									</h5>
								</div>
								<div class="card-block row">
									<div class="col-sm-12 col-lg-12 col-xl-12">
										<div class="table-responsive">
											<table class="table table-bordered checkbox-td-width">
												<tbody>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox">
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td>Eating Score</td>
													<td class="w-50">
														<input style="width: 20px;height: 20px;" type="checkbox" checked>
													</td>
													<td><span>10 Coins</span></td>
												</tr>
												<tr>
													<td style="text-align: center" colspan="3">
														total Score => 40 Coin
													</td>
												</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Target post end-->
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection