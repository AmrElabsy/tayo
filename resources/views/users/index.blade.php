@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left;margin-bottom: 10px">Users</h3>
			</div>
			<div class="container-fluid blog-page">
				<div class="row">
					<div class="col-xxl-6 set-col-12 box-col-6">
						<div class="card">
							<div class="blog-box blog-shadow"><img class="img-fluid bg-img-cover" src="{{ asset("assets/images/blog/blog.jpg") }}" alt="">
								<div class="blog-details">
									<p>1 April 2022</p>
									<h4>Admins</h4>
									<button onclick="window.location.href='{{ route("admin.index") }}'" class="btn btn-primary mb-3">Enter</button>
									<ul class="blog-social">
										<li>{{ $admins }} Admins</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-6 set-col-12 box-col-6">
						<div class="card">
							<div class="blog-box blog-shadow"><img class="img-fluid bg-img-cover" src="{{ asset("assets/images/blog/blog.jpg") }}" alt="">
								<div class="blog-details">
									<p>1 April 2022</p>
									<h4>Students</h4>
									<button onclick="window.location.href='{{ route("class.index") }}'" class="btn btn-primary mb-3">Enter</button>
									<ul class="blog-social">
										<li>{{ $classes }} Classes</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection