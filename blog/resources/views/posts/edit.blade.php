@extends('layouts.app')

@section('title', '| Add New Post')

@section('content')

	<div class="container">
		
		{{-- Check if current user is logged-in or a guest --}}
		@if (Auth::guest())
			
			<p class="mt-5">Please <a href="/login/">login</a> to add a new post.</p>
			
		@else
		        <h1 class="blog-title">Edit Post</h1>
					
					<form action="{{ route('posts.store', ['post_id' => $post->id ]) }}" method="POST">
						{{ csrf_field() }}
						<input type="hidden" name="author_ID" value="{{ Auth::id() }}" />
						<input type="hidden" name="type" value="post" />
						
						<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
							<label for="title">Title</label> <br/>
							<input type="text" name="title" id="title" value="{{ $post->title }}" />
							
							@if ($errors->has('title'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('title') }}</strong>
	                            </span>
	                        @endif
						</div>
						
						<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
							<label for="content">Content</label> <br/>
							<textarea name="content" id="content" cols="80" rows="6">{{ $post->body }}</textarea>

							@if ($errors->has('content'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('content') }}</strong>
	                            </span>
	                        @endif
						</div>

						<div class="form-group">
							<input type="submit" class="btn btn-primary" value="Edit" />
							<a class="btn btn-primary" href="{{ route('posts.index') }}">Cancel</a>
						</div>
					</form>

		@endif

	</div>
	
@endsection