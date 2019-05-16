<?php

namespace App;
use App\Company;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
      protected $fillable = ['ClientSurname', 'ClientName', 'ClientPatronymic', 'ClientMail', 'ClientPhone', 'company_id'];
      public function company()
      {
        return $this->belongsTo(Company::class);
      }
}
