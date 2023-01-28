<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 use HasFactory;
// one to many
 public function comments()
 {
  return $this->hasMany(Comment::class);
 }

//  many to many
 public function categories()
 {
  return $this->belongsToMany(Category::class);
 }
}