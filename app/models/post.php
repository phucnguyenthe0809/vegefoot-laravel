<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User', 'user_id', 'id');
  }
  public function category()
  {
      return $this->belongsToMany('App\models\category', 'post_category', 'post_id', 'category_id');
  }
}
