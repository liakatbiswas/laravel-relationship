<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
 public function show()
 {
  $posts      = Post::with('categories')->get();
  $categories = Category::with('posts')->get();
//   return \response()->json($posts);
  return \view('many', [
   'posts'      => $posts,
   'categories' => $categories,
  ]);
 }
}