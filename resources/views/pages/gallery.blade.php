@extends('layouts.layout')
<?php $page = 'gallery'; ?>
@section('content')
<div class="content">
    <h2>Gallery</h2>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <section>
				<ul class="lb-album">
                    <?php
                    $i = 0;
                    $count = count($images);
                    ?>
                    @foreach($images as $image)
                    <li>
                        <a href=<?php echo "#image-".$i ?>>
                            <img src="{{asset('images/'.$image->url)}}" alt="{{$image->alt}}">
                            <span>{{$image->title}}</span>
                        </a>
                        <div class="lb-overlay" id=<?php echo "image-".$i ?>>
                            <div class="lb-overlay-box">
                                <a href="#page" class="lb-close">x</a>
                                <img src="{{asset('images/'.$image->url)}}" alt="$image->alt">
                                <div class="lb-nav">
                                    <div class="prev">
                                        <a href=<?php
                                        if ($i == 0) {
                                            echo "#image-".($count - 1);
                                        }
                                        else {
                                            echo "#image-".($i - 1);
                                        } ?>
                                        class="lb-prev">&laquo;</a>
                                    </div>
                                    <div class="next">
                                        <a href=<?php
                                        if ($i == $count - 1) {
                                            echo "#image-0";
                                        }
                                        else {
                                            echo "#image-".($i + 1);
                                        } ?>
                                        class="lb-next">&raquo;</a>
                                    </div>
                                </div>
                                <div class="lb-details">
                                    <h3 class="title">{{$image->title}}</h3>
                                    <span class="gallery-description">{{$image->description}}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php $i++; ?>
                @endforeach
                </ul>
            </section>
        </div>
    </div>

</div><!-- content -->

@endsection
