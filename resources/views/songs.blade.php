@extends('layouts.home')

@section('listing')
<ul class="listing">
@foreach($songs as $song)


                <li>
                    <table class="listing">
                        <tbody>
                        <tr><td class="em">
                            <a href="/single/{{$song->id}}">
                                {{ $song->title }}</td></tr>
                            </a>    
                        <tr><td class="apad">{{ $song->fname }}</td></tr>
                    <tr><td class="details">{{ $song->short }}</td></tr>
                    

                     </tbody>
                    </table>
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
