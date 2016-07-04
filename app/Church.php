<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $table = 'church';

    protected $fillable = [
    	'nombre', 
    	'lema', 
    	'update_user',
    	'id_user'];
}
