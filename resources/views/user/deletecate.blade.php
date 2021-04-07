@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('deletepost')

<p class='msg'>{{ @$msg }}</p>
@foreach($cates as $cate) 

{!! Form::open(array('url' => '/user/deletecate/'.$cate->id, 'action' => 'pagesController@deleteCate') ) !!}
<ul>

<li><h3>Cate</h3></li>  
<li>{!! $cate->cate !!}</li>
<li>{!! $cate->subcate !!}</li>

<br /> 
   
<li>{!! Form::submit('Delete Cate',array('class' => 'button')) !!}</li>

@endforeach 
</ul>
{!! Form::close() !!}  

@stop

