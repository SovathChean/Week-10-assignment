<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    //
      protected $fillable = ['name', 'category_id', 'user_id'];

      public function category()
      {
        return $this->belongsTo(Category::class, 'category_id');
      }
      public function user(){
        return $this->belongsTo(User::class);
      }

}
