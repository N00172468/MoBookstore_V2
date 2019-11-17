<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T14:04:58+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-17T10:36:04+00:00




namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function customer() {
      return $this->hasOne('App\Customer');
    }

    // Telling Laravel that user and roles model are related:
    public function roles()
    {
      return $this->belongsToMany('App\Role', 'user_role');
    }

    // -------------------------------------------------------------------------

    // Show either a list (array) or just one user on what role they have:
    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
        return $this->hasAnyRole($roles) || abort(401, 'This action is unauthorized');
      }

      return $this->hasRole($roles) || abort(401, 'This action is unauthorized');
    }

    // Function that checks what role a user has:
    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }

    // Specifications (Array):
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
}
