<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  protected $fillable=['title','describe','slug','image','content','tags','users_id'];
}
