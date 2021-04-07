@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('posts')


<table class="table">
    <tr><th>TODOs</th> <th>Category</th> <th>Status</th> <th>Timestamp</th></tr>
    <tbody id='go'>
        
   @foreach($songs as $song)
    
    <tr class="bolder">
    	<td>{{ $song->title }}</td>
        <td>{{ $song->cate }}</td>
        <td>{{ $song->status }}</td>
        <td>{{ $song->timestamp }}</td>
    <td><a href="/user/edit/{{$song->id}}"> <img src="{{ URL::asset('img/edit.png') }}" /> </a></td>
    <td><a href='/user/delete/{{$song->id}}'> <img src="{{ URL::asset('img/delete.png') }}" /> </a></td>
    </tr>
   
    @endforeach
        
</tbody></table> 

@stop

