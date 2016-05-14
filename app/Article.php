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
    	'update_user',
    	'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
