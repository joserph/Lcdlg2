<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';

    protected $fillable = ['contenido', 'id_user', 'id_sermon', 'color'];

    public function sermon()
    {
        return $this->belongsTo('App\Sermon', 'id_sermon');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
