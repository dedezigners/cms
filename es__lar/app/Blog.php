<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'image', 'title', 'slug', 'description', 'comments_counts'
    ];

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
