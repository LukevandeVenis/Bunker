@extends('layouts.app')
@section('content')
	<div class="container">
		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())
			
			<p class="mt-5">Please <a href="/login/">login</a> to show this post.</p>
			
		@else

			<h1>{{$post->title}}</h1>
			<p>{{$post->body}}</p>
			<form method="post" action="{{url("posts/".$post->id."/comment/create")}}">
				{{csrf_field()}}
				<textarea  class="form-control" name="comment"></textarea>
				<button class="btn btn-success" type="submit">Submit</button>
			</form>
			@foreach($comments as $comment)
				<div>
					<form method="post" action="{{url('posts/'.$post->id.'/comment/'.$comment->id."/edit")}}">
						{{csrf_field()}}
						<textarea name="comment"{{ auth()->id() === $comment->user_id ? "" : "readonly" }}>{{$comment->comment}}</textarea>
						@if(auth()->id() === $comment->user_id )
							<button class="btn btn-success" type="submit">Submit</button>
						@endif
					</form>
					<a href="{{ url('posts/'.$post->id.'/comment/'.$comment->id."/delete") }}"><i class="fas fa-trash"></i></a>
				</div>
			@endforeach
		@endif
@stop
