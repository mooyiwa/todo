@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('editpost')

<p class='msg'>{{ @$msg }}</p>
@foreach($songs as $song)

{!! Form::open(array('url' => '/user/edit/'.$song->id, 'action' => 'pagesController@editPost') ) !!}
<ul>

<li>TODO Title</li>
<li>{!! Form::text('title',$song->title,array('required','class' => 'ent' )) !!}</li>

<li>Details</li>
<li>{!! Form::textarea('short',$song->short,array('required','class' => 'textarea','id' => 'editor' )) !!}</textarea></li><br>

<li>{!! Form::submit('Edit Post',array('class' => 'button')) !!}</li>

@endforeach
</ul>
{!! Form::close() !!}

@stop
