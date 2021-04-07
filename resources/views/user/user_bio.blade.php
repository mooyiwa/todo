@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('user_bio')

<p class='msg'>{{ @$msg }}</p>           
{!! Form::open(array('action' => 'pagesController@updateBio'))  !!}
<ul class="">

<li>{!! Form::text('first',$details->first, array('required','class' => 'ent', 'placeholder' => 'First name' )) !!}</li>

<li>{!! Form::text('last',$details->last, array('required','class' => 'ent', 'placeholder' => 'Surname' )) !!}</li>

<li>{!! Form::text('email',$details->email,array('required','class' => 'ent', 'placeholder' => 'email address' )) !!}</li>

<li>{!! Form::text('phone',$details->phone, array('required','class' => 'ent', 'placeholder' => 'Phone no')) !!}</li>

<li>{!! Form::text('fb',$details->fb, array('class' => 'ent', 'placeholder' => 'Facebook')) !!}</li>

<li>{!! Form::text('twitter',$details->twitter, array('class' => 'ent', 'placeholder' => 'Twitter')) !!}</li>

<li>{!! Form::text('ig',$details->ig, array('class' => 'ent', 'placeholder' => 'Instagram')) !!}</li>

<li>{!! Form::textarea('me',$details->me, array('class' => 'ent, textarea', 'placeholder' => 'About me')) !!}</li>

<li>{!! Form::submit('Update Bio',['class' => 'button']) !!}</li>

</ul>

{!! Form::close() !!}  

@stop

