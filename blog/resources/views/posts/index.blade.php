@extends('layouts.app')
@section('content')
<table>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->title}}</td>
  </tr>
  @endforeach
</table>
@stop
