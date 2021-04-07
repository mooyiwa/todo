@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('editpost')

<p class='msg'>{{ @$msg }}</p>
@foreach($cates as $cate)

{!! Form::open(array('url' => '/user/editcate/'.$cate->id, 'action' => 'pagesController@editCate') ) !!}
<ul>

<li>Cate</li>
<li>{!! Form::text('cate',$cate->cate,array('required','class' => 'ent' )) !!}</li>


<li>{!! Form::submit('Edit Cate',array('class' => 'button')) !!}</li>

@endforeach
</ul>
{!! Form::close() !!}

@stop
