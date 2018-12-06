@extends('layouts.app')
@section('content')
<table>
  @foreach($posts as $post)
  <tr>
    <td>{{$post->title}} <a href="{{ url('posts/'.$post->id.'/edit') }}"><i class="fas fa-edit"></i></a> <a href="{{ url('posts/'.$post->id.'/delete') }}"><i class="fas fa-trash"></i></a></td>
  </tr>
  @endforeach
</table>
@stop
