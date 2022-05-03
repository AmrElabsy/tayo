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
							data-bs-target="#add-modal">Add Post
					</button>
				<div class="modal fade bd-example-modal-lg" id="add-modal" tabindex="-1" role="dialog"
					 aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title">Add new post</h4>
								<button class="btn-close" type="button" data-bs-dismiss="modal"
										aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form class="form theme-form" method="post" action="{{ route("post.store") }}"
									  enctype="multipart/form-data">
									@csrf
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label" for="exampleFormControlTextarea4">Post
													Content</label>
												<textarea class="form-control" id="exampleFormControlTextarea4" rows="3"
														  name="postcontent"></textarea>
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Post Images</label>
												<input class="form-control" type="file" multiple name="images[]">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div>
												<label class="form-label">Post Videos</label>
												<input class="form-control" type="file" multiple name="videos[]">
											</div>
										</div>
									</div>
									<div class="row mb-3">
										<div class="col">
											<div class="row">
												<div class="col-4">
													<label class="form-label">Link Label</label>
													<input class="form-control" type="text" name="label">
												</div>
												<div class="col-8">
													<label class="form-label">Post Link</label>
													<input class="form-control" type="url" name="link">
												</div>
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
						@foreach($posts as $post)
							<div class="col-sm-12">
								<div class="card">
									<div class="profile-post">
										<div class="post-header">
											<div class="media"><img class="img-thumbnail rounded-circle me-3"
																	src="{{ asset("storage/" . $post->user->image) }}"
																	alt="Generic placeholder image">
												<div class="media-body align-self-center"><a href="#">
														<h5 class="user-name">{{ $post->user->name }}</h5></a>
													<h6>{{ $post->time_difference }}</h6>
												</div>
											</div>
											<div class="post-setting"><i class="fa fa-ellipsis-h"></i></div>
										</div>
										<div class="post-body">
											@if(isset($post->images))
												@foreach($post->images as $image)
													<div class="img-container" style="display: inline">
														<div class="my-gallery" itemscope="" style="display: inline">
															<figure itemprop="associatedMedia" itemscope=""
																	style="display: inline"><a
																		itemprop="contentUrl" data-size="1600x950"><img
																			class="img-fluid rounded"
																			style="max-height: 350px; width: auto; display: inline"
																			src="{{ asset("storage/" . $image->path) }}"
																			itemprop="thumbnail" alt="gallery"></a>
																<figcaption itemprop="caption description">Image caption
																	1
																</figcaption>
															</figure>
														</div>
													</div>
												@endforeach
											@endif

											@if(isset($post->videos))
												@foreach($post->videos as $video)

												@endforeach
											@endif


											<p>{{ $post->content }}</p>

											@if($post->link)
												<a class="btn btn-success"
												   href="{{ $post->link }}">{{ $post->label }}</a>
											@endif
										</div>
									</div>
								</div>
							</div>
					@endforeach
					</div>
				</div>
			</div>

@endsection