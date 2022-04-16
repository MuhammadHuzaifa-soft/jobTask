<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Aldemeery\Sieve\Concerns\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
      use Filterable;
      protected $fillable =[
      'post_title' ,  'slogan' ,
      'job_type' , 'availability' , 'pay_rate' , 'post_body'


      ];




    public function user(){
    return $this->belongsTo(\App\Models\User::class);
    }
      public function skills(){
      return $this->belongsToMany(\App\Models\Skill::class);
      }
}
