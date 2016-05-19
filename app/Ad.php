<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';

    protected $fillable = [
    	'nombre', 
    	'estatus', 
    	'contenido', 
    	'fecha',
    	'hora', 
    	'update_user',
    	'id_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
