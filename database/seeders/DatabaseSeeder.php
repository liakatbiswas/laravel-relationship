<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
 /**
  * Seed the application's database.
  *
  * @return void
  */
 public function run()
 {
  User::factory(10)->create();
  Phone::factory(10)->create();
  Post::factory(10)->create();
  Comment::factory(20)->create();

  $categories = ['category_one', 'category_two', 'category_three', 'category_four', 'category_five'];
  foreach ($categories as $category) {
   Category::create([
    'name' => $category,
   ]);
  }

 }
}