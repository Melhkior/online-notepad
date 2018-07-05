<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $posts = Post::all();
    
    return view('posts.index', compact('posts'));
  }
	
	public function create()
  {
    return view('posts.create');
  }

  public function store()
  {
   	$this->validate(request(), [
   		'title' => 'required',
   		'body'  => 'required'
   	]);
    Post::create([
      'title'     => request('title'),
      'body'      => request('body'),
      'user_id'   => auth()->id()
    ]);
   	return redirect('/board');
  }

  public function edit($id)
  {
    $post = Post::find($id);
    
    return view('posts.edit', ['post' => $post]);
  }

  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    $post->title = $request->title;
    $post->body = $request->body;
    $post->save();
    
    return redirect()->route('board');
  }

  public function delete($id) 
  {
    $post = Post::find($id);

    if ($post && $post->user_id == auth()->id()) { 
      $post->delete();
    }
    return redirect()->route('board');
  }
}
