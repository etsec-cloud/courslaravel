<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
    'content'
];

/**
  * get the user that owns the comment.
  */
  public function user()
  {
     return $this->belongsTo('App\User');
  }

  /**
   * get the post that owns the comment.
   */
 
 public function post()
 
{
   return $this->hasMany('App\Post');
 }


 protected $table ="comments";

}
