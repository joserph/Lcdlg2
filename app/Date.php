<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'dates';

    protected $fillable = ['fecha', 'tipo', 'id_user', 'update_user'];

    public function sermons()
    {
        return $this->hasMany('App\Sermon', 'id_month', 'id_year');
    }
}
