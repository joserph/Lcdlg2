<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['nombre', 'comentario', 'id_user', 'id_article', 'color', 'date'];

    public function sermon()
    {
        return $this->belongsTo('App\Sermon', 'id_article');
    }

    public function article()
    {
    	return $this->belongsTo('App\Sermon', 'id_article');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

}
