@extends('layouts.layout')

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="blurb">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			@foreach($images as $image)
				<div class="col-md-4">
					<div class="image">
						<a href="http://www.etsy.com" target="_blank" class="rollover-link">
							<div class="rollover">
								<p class="title">{{ $image->title }}</p>
								<div class="s-m-i">
									<div class="row">
										<div class="col-md-10 col-md-offset-1">
											<div class="row">
												<div class="col-md-3">
													<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
												</div>
												<div class="col-md-3">
													<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a>
												</div>
												<div class="col-md-3">
													<a href="http://www.pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
												</div>
												<div class="col-md-3">
													<a href="http://www.tumblr.com" target="_blank"><i class="fa fa-tumblr"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</a>
						</div>

						<img src="{{asset('images/'.$image->url)}}" alt="{{$image->alt}}" width="200" class="frontpage-image">
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div><!-- content -->
@endsection
