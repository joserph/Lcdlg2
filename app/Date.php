<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';

    protected $fillable = ['fecha', 'tipo', 'id_user', 'update_user'];
}
