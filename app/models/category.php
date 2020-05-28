<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
   public function categoryChild()
   {
       return $this->hasMany('App\models\category', 'parent', 'id');
   }
}
