<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    protected $guarded = [];

    
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }    
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'post_tags')->withTimestamps();
    }
    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_posts')->withTimestamps();
    }


    public function getRouteKeyName()
    {
    	return 'slug';
    }

}
