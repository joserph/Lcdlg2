<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = ['nombre', 'comentario', 'id_user', 'id_article'];

    public function sermon()
    {
        return $this->belongsTo('App\Sermon', 'id_article');
    }

    public function article()
    {
    	return $this->belongsTo('App\Sermon', 'id_article');
    }
}
