<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Aldemeery\Sieve\Concerns\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;
      use Filterable;
     public function posts(){
     return $this->belongsToMany(\App\Models\Post::class);
     }
}
