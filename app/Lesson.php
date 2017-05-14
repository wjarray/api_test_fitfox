<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
  protected $guarded = array('id', 'updated_at','created_at');


  public function users()
{
  return $this->belongsToMany('App\User');

}

}
