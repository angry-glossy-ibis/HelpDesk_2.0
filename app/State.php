<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
  protected $fillable = [
      'name',
  ];
  public function requests()
  {
    return $this->hasMany('App\Request');
  }
}
