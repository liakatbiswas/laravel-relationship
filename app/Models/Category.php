<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
 use HasFactory;

 //  many to many
 public function posts()
 {
  return $this->belongsToMany(Post::class);
 }
}