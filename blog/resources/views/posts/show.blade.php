@extends('layouts.app')
@section('content')
	<div class="container">
		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())
			
			<p class="mt-5">Please <a href="/login/">login</a> to show this post.</p>
			
		@else

			<h1>{{$post->title}}</h1>
			<p>{{$post->body}}</p>
		@endif
@stop
