<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   protected $fillable = [
       'name', 'content'
   ];

   /**
     * get the user that owns the post.
     */
     public function user()
     {
        return $this->belongsTo('App\User');
     }

     /**
      * get the comments for the blog post.
      */
    
    public function comments()

    { 
      return $this->hasMany('App\Comment');
    }


    protected $table ="posts";

}
