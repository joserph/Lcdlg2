<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preacher extends Model
{
    protected $table = 'preachers';

    protected $fillable = ['nombre', 'id_user', 'update_user'];

    public function sermons()
    {
        return $this->hasMany('App\Sermon', 'id_preacher');
    }
}
