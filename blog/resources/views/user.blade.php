@extends('layouts.app')
@section('content')
    <h2>Gebruikers tabel</h2>

    <table class="table table-hover">

        <thead>

        <th>ID</th>

        <th>Gebruikersnaam</th>

        <th>Wachtwoord</th>

        <th>E-mail</th>

        <th></th>

        <th></th>

        </thead>

        <tbody>
        @foreach($users as $user)

            <tr>

                <td>{{$user->id}} </td>

                <td>{{$user->name}} </td>

                <td>{{$user->password}} </td>

                <td>{{$user->email}} </td>

                <td><a href="/users/{{$user->id}}">Edit</a></td>

                <td></td>


            </tr>
        @endforeach

        </tbody>

    </table>
@stop