@extends('layouts.app')

@section('title', ' Edit user')

@section('content')

    <div class="container">

        {{-- Check if current user is logged-in or a guest --}}
        @if (Auth::guest())

            <p class="mt-5">Please <a href="/login/">login</a> to edit users.</p>

        @else
            <form method="post" action="{{route('users.update', $user)}}">
                {{ csrf_field() }}
                {{ method_field('patch') }}
                <div class="form-group">
                    <label>Gebruikers ID:</label>
                    <input class="form-control" type="text" readonly value="{{$user->id}}">
                </div>
                <div class="form-group">
                    <label>Naam:</label>
                    <input class="form-control" type="text" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label>Email address:</label>
                    <input class="form-control" type="text" value="{{$user->email}}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endif

    </div>

@endsection