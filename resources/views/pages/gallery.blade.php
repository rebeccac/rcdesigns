@extends('layouts.layout')
<?php $page = 'gallery'; ?>
@section('content')
<div class="content">
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section>
				<ul class="lb-album">
					<li>
						<a href="#image-1">
							<img src="{{asset('images/gaia.png')}}" alt="Gaia">
							<span>Gaia</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<div class="lb-overlay-box">
                                <a href="#page" class="lb-close">x</a>
                                <img src="{{asset('images/gaia.png')}}" alt="Gaia">
                                <div class="lb-nav">
                                    <div class="prev">
                                    <a href="#image-10" class="lb-prev">&laquo;</a>
                                </div>
                                <div class="next">
    				                <a href="#image-2" class="lb-next">&raquo;</a>
                                </div>
                                </div>
							    <div class="lb-details">
								    <h3 class="title">Gaia</h3>
							    </div>
                            </div>
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="{{asset('images/goldrush.png')}}" alt="Gaia">
							<span>Goldrush</span>
						</a>
						<div class="lb-overlay" id="image-2">
                            <div class="lb-overlay-box">
                                <a href="#page" class="lb-close">x</a>
							    <img src="{{asset('images/goldrush.png')}}" alt="Goldrush" >
							    <div class="title">
				                    <h3>Goldrush</h3>
                                </div>
							</div>
                        </div>

					</li>
					<li>
						<a href="#image-3">
							<img src="{{asset('images/mystic.png')}}" alt="Gaia">
							<span>Mystic</span>
						</a>
						<div class="lb-overlay" id="image-3">
                            <div class="lb-overlay-box">
                                <a href="#page" class="lb-close">x</a>
							    <img src="{{asset('images/mystic.png')}}" alt="Mystic" >
							    <div class="title">
								    <h3>Mystic</h3>
							    </div>
                            </div>
                        </div>
					</li>
					<li>
						<a href="#image-4">
							<img src="{{asset('images/spiral.png')}}" alt="Gaia">
							<span>Spiral</span>
						</a>
						<div class="lb-overlay" id="image-4">
                            <div class="lb-overlay-box">
                                <a href="#page" class="lb-close">x</a>
							    <img src="{{asset('images/spiral.png')}}" alt="Spiral">
							    <div class="title">
								    <h3>Spiral</h3>
							    </div>
                            </div>
						</div>
					</li>
                </ul>
            </section>
        </div>
    </div>

</div><!-- content -->

@endsection
