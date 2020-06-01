<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public $timestamps=false;
   public function categoryChild()
   {
       return $this->hasMany('App\models\category', 'id_parent', 'id');
   }
   public function parent()
   {
       return $this->belongsTo('App\models\category', 'id_parent', 'id');
   }

 
}
