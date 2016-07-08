<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'sermons';

    protected $fillable = [
    	'title', 
    	'fecha', 
    	'content',
    	'estatus', 
    	'tipo', 
    	'audio',
    	'video', 
    	'comentatio',
        'id_preacher',
        'id_month',
        'id_year',
    	'update_user',
    	'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'id_article');
    }

    public function preacher()
    {
        return $this->belongsTo('App\Preacher', 'id_preacher');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
