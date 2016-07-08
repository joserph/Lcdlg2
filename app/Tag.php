<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['nombre'];

    public function articles()
    {
    	return $this->belongsToMany('App\Article');
    }

    public function sermons()
    {
    	return $this->belongsToMany('App\Sermon');
    }
}
