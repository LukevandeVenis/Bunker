<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
      $view = view("posts.index");
      $view->posts = Post::all();
      return $view;
    }
    public function show(Post $post){
      $view = view("posts.show");
      $view->post = $post;
      $view->comments = $post->comments;
      return $view;
    }
    public function create(){
      $view = view("posts.create");
      return $view;
    }
    public function edit(Post $post){
      $view = view("posts.edit");
      $view->post = $post;
      return $view;
    }
    public function delete(Post $post){
      $post->delete();
      return redirect()->to('/posts')->with('Succes', 'Het item is succesvol verwijderd!');
    }
    public function store(Request $request, $post_id=null){
      $this->validate($request, array(
        'title' => 'required|max:255',
        'content' => 'required'
      ));
      $post = post::findOrNew($post_id);
      $post->user_id = auth()->id();
      $post->title = $request->get('title');
      $post->body = $request->get('content');
      $post->save();
      return redirect()->to('/posts')->with('Succes', 'Het item is succesvol opgeslagen!');
    }
}
