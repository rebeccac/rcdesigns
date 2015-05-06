@extends('layouts.layout')
<?php $page = 'upload'; ?>
@section('content')
<div class="content">
    <h2>Upload form</h2>
<div class="about-section">
   <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <?php $file = Session::get('filename'); ?>
          <div class="alert-box success">
          <h2>Your image has been uploaded</h2>
          <img src="{{asset('images/'.$file)}}">
          </div>
        @endif
        <!-- <div class="secure">Upload form</div> -->
        {!! Form::open(array('url'=>'admin/upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
              <div class="form-group">
                  {!! Form::label('Title') !!}
                  {!! Form::text('title', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Title')) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('Alt description') !!}
                  {!! Form::text('alt', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Alt description')) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('Text description') !!}
                  {!! Form::text('description', null,
                    array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Text description')) !!}
              </div>

          {!! Form::file('image') !!}



	  <p class="errors">{!!$errors->first('image')!!}</p>
	@if(Session::has('error'))
	<p class="errors">{!! Session::get('error') !!}</p>
	@endif
        </div>
        </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}


      </div>
   </div>
</div>
</div><!-- content -->
@endsection
