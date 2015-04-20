@extends('layouts.layout')
<?php $page = 'gallery'; ?>
@section('content')
<div class="content">
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="gallery">
                <a class="image" tabindex="1"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="2"><img class="img" src="{{asset('images/goldrush.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="3"><img class="img" src="{{asset('images/seanymph.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="4"><img class="img" src="{{asset('images/mystic.png')}}" alt="Gaia"></a>

                <a class="image" tabindex="5"><img class="img" src="{{asset('images/spiral.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="6"><img class="img" src="{{asset('images/ambrosia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="7"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="8"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>

                <a class="image" tabindex="1"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="2"><img class="img" src="{{asset('images/goldrush.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="3"><img class="img" src="{{asset('images/seanymph.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="4"><img class="img" src="{{asset('images/mystic.png')}}" alt="Gaia"></a>

                <a class="image" tabindex="5"><img class="img" src="{{asset('images/spiral.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="6"><img class="img" src="{{asset('images/ambrosia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="7"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
                <a class="image" tabindex="8"><img class="img" src="{{asset('images/gaia.png')}}" alt="Gaia"></a>
            </div><!-- gallery -->
        </div>
    </div>

</div><!-- content -->

@endsection
