<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class UserRegister extends Model
{
  public $fillable = [
    'id',
    'name',
    'email',
    'password',
    'phone',
    'avarter',
    'accept'
  ];

  public function NewsList() {
    return $this->hasMany('App\Http\Model\NewsList');
  }
}
