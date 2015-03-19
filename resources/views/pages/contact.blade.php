@extends('layouts.layout')

@section('content')
<div class="content">
    <h1>Say hello</h1>

    <ul>
        @foreach($errors->all() as $error)
            <li class="red number-dotpoints errors">{{$error}}</li>
        @endforeach
    </ul>

    {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('Your Name') !!}
        {!! Form::text('name', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your name')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your E-mail Address') !!}
        {!! Form::text('email', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your e-mail address')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Your Message') !!}
        {!! Form::textarea('message', null,
            array('required',
                  'class'=>'form-control',
                  'placeholder'=>'Your message')) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Contact',
          array('class'=>'submit')) !!}
    </div>
    {!! Form::close() !!}</div>
@endsection
