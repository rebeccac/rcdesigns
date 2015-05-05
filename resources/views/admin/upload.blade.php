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
        <div class="secure">Upload form</div>
        {!! Form::open(array('url'=>'admin/upload','method'=>'POST', 'files'=>true)) !!}
         <div class="control-group">
          <div class="controls">
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
