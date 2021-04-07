@extends('layouts.user')
@section('logged')

@include('includes.user_dash')

@stop


@section('post')

<p class='msg'>{{ @$msg }}</p>
{!! Form::open(array('action' => 'pagesController@post','enctype' => 'multipart/form-data') )  !!}
<ul>

 <li>Post Under</li>

 <li><select name="cate" class="ent select">

    @foreach ($cates as $cate) {
    <option>{{ $cate->cate }}</option>
    @endforeach

    </select></li><br>


<li>TODO Title </li>

<li>{!! Form::text('title',null,array('required','class' => 'ent', 'placeholder' => 'Example Title' )) !!}</li><br>

<li>Description</li>
<li>{!! Form::textarea('short',null,array('required','class' => 'textarea', 'placeholder' => 'Details on TODO','id' => 'editor' )) !!}</textarea></li><br>

<li>Status</li>
<li><div class="input-group-lg">
  {!! Form::select('status', array('Pending' => 'Pending', 'Completed' => 'Completed')) !!}
 </div>
</li>

<li>{!! Form::submit('Post TODO',array('class' => 'button')) !!}</li>

</ul>
{!! Form::close() !!}

@stop
