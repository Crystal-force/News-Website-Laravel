<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class NewsList extends Model
{
    public $fillable = [
      'id',
      'title',
      'img',
      'content',
      'user_id',
      'category_list_id',
      'status',
    ];

    public function NewsComment() {
      return $this->hasMany('App\Http\Model\NewsComment');
    }

    public function UserRegister() {
      return $this->belongsTo('App\Http\Model\UserRegister', 'user_id');
    }
    public function categorylist() {
      return $this->belongsTo('App\Http\Model\CategoryList', 'category_list_id');
    }
}
