@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">TimeLine</h3>
			</div>
			<div class="col-12 col-sm-6">
				<p class="breadcrumb">
					<button class="btn btn-primary" type="button" data-bs-toggle="modal"
							data-bs-target=".bd-example-modal-lg">Add Post
					</button>
				<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add new post</h4>
								<button class="btn-close" type="button" data-bs-dismiss="modal"
										aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form class="form theme-form">
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label" for="exampleFormControlTextarea4">Post
													Content</label>
												<textarea class="form-control"
														  id="exampleFormControlTextarea4"
														  rows="3"></textarea>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Post Images</label>
												<input class="form-control" type="file" multiple>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Post Videos</label>
												<input class="form-control" type="file" multiple>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Post Link</label>
												<input class="form-control" type="url">
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger" type="button" data-bs-dismiss="modal">Close
								</button>
								<button class="btn btn-primary" type="button">Add</button>
							</div>
						</div>
					</div>
				</div>
				</p>
			</div>
		</div>
	</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="user-profile">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 xl-65">
					<div class="row">
						<!-- profile post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="profile-post">
									<div class="post-header">
										<div class="media"><img class="img-thumbnail rounded-circle me-3"
																src="../assets/images/user/7.jpg"
																alt="Generic placeholder image">
											<div class="media-body align-self-center"><a href="#">
													<h5 class="user-name">Ahmed karem</h5></a>
												<h6>22 Hours ago</h6>
											</div>
										</div>
										<div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
									</div>
									<div class="post-body">
										<div class="img-container">
											<div class="my-gallery" itemscope="">
												<figure itemprop="associatedMedia" itemscope=""><a
															href="../assets/images/user-profile/post1.jpg"
															itemprop="contentUrl" data-size="1600x950"><img
																class="img-fluid rounded"
																src="../assets/images/user-profile/post1.jpg"
																itemprop="thumbnail" alt="gallery"></a>
													<figcaption itemprop="caption description">Image caption 1
													</figcaption>
												</figure>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
											eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
											ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
											aliquip ex ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
											pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
											culpa qui officia deserunt mollit anim id est laborum. </p>
									</div>
								</div>
							</div>
						</div>
						<!-- profile post end-->
						<!-- profile post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="profile-post">
									<div class="post-header">
										<div class="media"><img class="img-thumbnail rounded-circle me-3"
																src="../assets/images/user/7.jpg"
																alt="Generic placeholder image">
											<div class="media-body align-self-center"><a href="#">
													<h5 class="user-name">Ahmed karem</h5></a>
												<h6>22 Hours ago</h6>
											</div>
										</div>
										<div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
									</div>
									<div class="post-body">
										<div class="img-container">
											<div class="row mt-4 pictures my-gallery"
												 id="aniimated-thumbnials-2" itemscope="">
												<figure class="col-sm-6" itemprop="associatedMedia"
														itemscope=""><a
															href="../assets/images/user-profile/post2.jpg"
															itemprop="contentUrl" data-size="1600x950"><img
																class="img-fluid rounded"
																src="../assets/images/user-profile/post2.jpg"
																itemprop="thumbnail" alt="gallery"></a>
													<figcaption itemprop="caption description">Image caption 1
													</figcaption>
												</figure>
												<figure class="col-sm-6" itemprop="associatedMedia"
														itemscope=""><a
															href="../assets/images/user-profile/post3.jpg"
															itemprop="contentUrl" data-size="1600x950"><img
																class="img-fluid rounded"
																src="../assets/images/user-profile/post3.jpg"
																itemprop="thumbnail" alt="gallery"></a>
													<figcaption itemprop="caption description">Image caption 2
													</figcaption>
												</figure>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
											eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
											ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
											aliquip ex ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
											pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
											culpa qui officia deserunt mollit anim id est laborum. </p>
									</div>
								</div>
							</div>
						</div>
						<!-- profile post end   -->
						<!-- profile post start-->
						<div class="col-sm-12">
							<div class="card">
								<div class="profile-post">
									<div class="post-header">
										<div class="media"><img class="img-thumbnail rounded-circle me-3"
																src="../assets/images/user/7.jpg"
																alt="Generic placeholder image">
											<div class="media-body align-self-center"><a href="#">
													<h5 class="user-name">Ahmed karem</h5></a>
												<h6>22 Hours ago</h6>
											</div>
										</div>
										<div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
									</div>
									<div class="post-body">
										<div class="img-container">
											<div class="my-gallery" itemscope="">
												<figure itemprop="associatedMedia" itemscope=""><a
															href="../assets/images/user-profile/post4.jpg"
															itemprop="contentUrl" data-size="1600x950"><img
																class="img-fluid rounded"
																src="../assets/images/user-profile/post4.jpg"
																itemprop="thumbnail" alt="gallery"></a>
													<figcaption itemprop="caption description">Image caption 1
													</figcaption>
												</figure>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
											eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
											ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
											aliquip ex ea commodo consequat. Duis aute irure dolor in
											reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
											pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
											culpa qui officia deserunt mollit anim id est laborum. </p>
										<button class="btn btn-success" type="button">Link</button>
									</div>
								</div>
							</div>
						</div>
						<!-- profile post end-->
					</div>
				</div>
			</div>

@endsection