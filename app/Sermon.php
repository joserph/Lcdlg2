<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Sermon extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    protected $table = 'sermons';

    protected $fillable = [
    	'title', 
    	'fecha', 
    	'content',
    	'estatus', 
    	'tipo', 
    	'audio',
    	'video', 
    	'comentatio', 
    	'update_user',
    	'id_user', 
    	'id_preacher', 
    	'id_month',
    	'id_year'];

    public function month()
    {
        return $this->belongsTo('App\Date', 'id_month');
    }

     public function year()
    {
        return $this->belongsTo('App\Date', 'id_year');
    }

    public function preacher()
    {
        return $this->belongsTo('App\Preacher', 'id_preacher');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }
}
