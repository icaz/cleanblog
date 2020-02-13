<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
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
                'source' => 'name'
            ]
        ];
    }    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'category_posts')->orderBy('created_at','DESC')->paginate(5);
    }

    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
