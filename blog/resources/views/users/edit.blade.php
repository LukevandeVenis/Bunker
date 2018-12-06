
@extends('layouts.app')

@section('title', '| Add New Post')

@section('content')

    <div class="container">
        
        {{-- Check if current user is logged-in or a guest --}}
        @if (Auth::guest())
            
            <p class="mt-5">Please <a href="/login/">login</a> to add a new post.</p>
            
        @else
                <h1 class="blog-title">Edit Post</h1>
                    
                    <form action="{{route('users.store', ['user_id' => $user->id ])}}" method="POST">
                      {{ csrf_field() }}
                <div class="form-group">
                    <label>Gebruikers ID:</label>
                    <input class="form-control" type="text" readonly value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <label>Naam:</label>
                    <input class="form-control" type="text" name="name" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email address:</label>
                    <input class="form-control" type="text" name="email" value="{{$user->email}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        @endif

    </div>
    
@endsection