@extends('layouts.user')
@section('logged')

@include('includes.user_dash')        
             
@stop


@section('cates')


<table class="table">
    <tr><th>Cate</th></tr>
    <tbody id='go'>
        
   @foreach($cates as $cate)
    
    <tr class="bolder"><td>{{ $cate->cate }}</td>
        
    <td><a href="/user/editcate/{{$cate->id}}"> Edit </a></td>
    <td><a href='/user/deletecate/{{$cate->id}}'> Delete </a></td>
    </tr>
   
    @endforeach
        
</tbody></table> 

@stop

