<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preacher extends Model
{
    protected $table = 'preachers';

    protected $fillable = ['nombre', 'id_user', 'update_user'];
}
