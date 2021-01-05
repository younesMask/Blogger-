<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


 

class Post extends Model
{   
    Use SoftDeletes;

    protected $fillable = [

        'title','content', 'category_id', 'featured', 'slug', 'user_id'
    ];

    public function getFeaturedAttribute($featured) 
    {
        return asset($featured);
    }

    protected $date =  ['deleted_at'];

    public function category() {
        return $this->BelongsTo('App\Category'); 
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
