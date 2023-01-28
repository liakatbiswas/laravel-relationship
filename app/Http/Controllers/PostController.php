<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;

class PostController extends Controller
{
 public function show()
 {
  $posts    = Post::with('comments')->get();
  $comments = Comment::all();

//   return \response()->json($posts);
//   return \response()->json($comments);

  return \view('post', [
   'posts'    => $posts,
   'comments' => $comments,
  ]);
 }
}