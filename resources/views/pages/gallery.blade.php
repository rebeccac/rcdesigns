@extends('layouts.layout')
<?php $page = 'gallery'; ?>
@section('content')
<div class="content">
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="gallery">
                <a class="image gallery-img" tabindex="1"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="2"><img class="img" src="{{asset('images/goldrush.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="3"><img class="img" src="{{asset('images/seanymph.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="4"><img class="img" src="{{asset('images/mystic.png')}}" alt="Gaia" class="gallery-img"></a>

                <a class="image" tabindex="5"><img class="img" src="{{asset('images/spiral.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="6"><img class="img" src="{{asset('images/ambrosia.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="7"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="8"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia" class="gallery-img"></a>

                <a class="image" tabindex="9"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="10"><img class="img" src="{{asset('images/goldrush.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="11"><img class="img" src="{{asset('images/seanymph.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="12"><img class="img" src="{{asset('images/mystic.png')}}" alt="Gaia" class="gallery-img"></a>

                <a class="image" tabindex="13"><img class="img" src="{{asset('images/spiral.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="14"><img class="img" src="{{asset('images/ambrosia.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="15"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia" class="gallery-img"></a>
                <a class="image" tabindex="16"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia" class="gallery-img"></a>

                <span class="exit">x</span>
            </div><!-- gallery -->
        </div>
    </div>

</div><!-- content -->

@endsection
