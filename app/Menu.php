<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
    	'nombre', 
    	'estatus', 
    	'peso',
    	'tipo', 
    	'id_padre', 
    	'categoria',
    	'id_user', 
    	'update_user'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
