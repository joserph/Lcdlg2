<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model
{
    protected $table = 'verses';

    protected $fillable = [
    	'libro', 
    	'capitulo', 
    	'versiculo', 
    	'texto',
        'verso',
    	'update_user',
    	'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

}
