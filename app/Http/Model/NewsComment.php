<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    public $fillable = [
      'id',
      'comment',
      'newslist_id'
    ];
    
    public function NewsList() {
      return $this->belongsTo('App\Http\Model\NewsList', 'newslist_id');
    }
}
