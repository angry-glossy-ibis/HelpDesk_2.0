<?php

namespace App;
use App\Client;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
  protected $fillable = ['user_id', 'state_id', 'client_id', 'name', 'summary', 'comm'];
  public function user()
  {
    return $this->belongsTo('App\User');
  }
  public function client()
  {
    return $this->belongsTo(Client::class);
  }
  public function state()
  {
    return $this->belongsTo('App\State');
  }
  public function company()
  {
    return $this->belongsTo('App\Company');
  }
}
