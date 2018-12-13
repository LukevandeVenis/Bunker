@extends('layouts.app')
@section('content')
  @foreach($posts as $post)
  	<div class="post-container">
  		<h3 class="post-title">{{$post->title}}</h3>
  		<div class="post-body">
  			{{ str_limit($post->body, 250)}}
  		</div>
  		<div class="post-icons">
		 	 <a href="{{ url('posts/'.$post->id.'/edit') }}"><i class="fas fa-edit"></i></a> 
		 	 <a href="{{ url('posts/'.$post->id.'/delete') }}"><i class="fas fa-trash"></i></a>
		 	 <a href="{{ url('posts/'.$post->id.'/show/') }}"><i class="fas fa-eye"></i></a>
		</div>
	</div>
  @endforeach
@stop
