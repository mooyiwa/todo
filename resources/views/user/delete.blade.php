@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('deletepost')

<p class='msg'>{{ @$msg }}</p>
@foreach($songs as $song) 

{!! Form::open(array('url' => '/user/delete/'.$song->id, 'action' => 'pagesController@deletePost') ) !!}
<ul>

<li><h3>TODO</h3></li>  
<li>{!! $song->title !!}</li><br>
    
  
<li>{!! Form::submit('Delete Post',array('class' => 'button')) !!}</li>

@endforeach 
</ul>
{!! Form::close() !!}  

@stop

