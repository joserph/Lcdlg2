<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'role'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'password_temp', 'code', 'active'];

    public function sermons()
    {
        return $this->hasMany('App\Sermon', 'id_user');
    }

    public function articles()
    {
        return $this->hasMany('App\Article', 'id_user');
    }

    public function menus()
    {
        return $this->hasMany('App\Menu', 'id_user');
    }

    public function ads()
    {
        return $this->hasMany('App\Ad', 'id_user');
    }

    public function verses()
    {
        return $this->hasMany('App\Verse', 'id_user');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'id_user');
    }

    public function notes()
    {
        return $this->hasMany('App\Note', 'id_user');
    }
}
