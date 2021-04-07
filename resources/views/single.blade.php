@extends('layouts.single')

@section('listing')
<ul>
@foreach($songs as $song)

               <li><img class='single' src="/photos/{{ $song->post_img }}" /></li>
               <li style="margin-top: 20px;"><b>{{ $song->title }}</b></li>
                        <li class="">{{ $song->fname }}</li><br />
                        <li class="details">{!! $song->short !!}</li><br>
<li>
<audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="/uploads/{!! $song->song_id !!}" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</li>
            

@endforeach
</ul>

@stop


@section('cates')
<ul class="cates">
@foreach($cates as $cate)

 <li><a href="/cate/{{ $cate->cate }}"> {{ $cate->cate }} </a></li>

@endforeach
</ul>

@stop
