@php
    //$name="Reethu"
@endphp 
@extends('layout')

@section('title',"Home")
@section('mainContent')
<h1>Home Page</h1>


@if (request()->isMethod('get'))
<p>{{$name}}</p>
{{$message}}
@foreach($names as $nam)
<li>{{$nam}}</li>

@endforeach
@if (1==1)
<div>
    yes
</div>
@else
<div>
    no
</div>
@endif
@endif

<form action="/" method="POST">
 @csrf
<input type="text" name="name">
<input type="email" name="email">
<button type="submit">Submit</button>
</form>





@if (request()->isMethod('post'))
<h1>Name is {{$name}}</h1>
<h1>Email is {{$email}}</h1>
@endif
@endsection