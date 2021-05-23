<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryList extends Model
{
    public $fillable = [
      'id',
      'category'
    ];

    public function newslists() {
      return $this->hasMany('App\Http\Model\NewsList');
    }
}
