@extends("layouts.app")

@section("content")
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-sm-6">
				<h3 style="text-align: left">Classes Score</h3>
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
									<a href="{{ route("score.show", $class->id) }}">
										<h6>{{ $class->name }}</h6>
									</a>
									<div class="blog-bottom-content">
										<ul class="blog-social">
											<li>by: {{ $class->admin?->name }}</li>
											<li>{{ sizeof( $class->students ) }} Student</li>
										</ul>
										<hr>
										<p class="mt-0">{{ $class->description }}</p>
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