<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T14:48:47+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-02T16:14:32+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  // Telling Laravel that user and roles model are related:
  public function users()
  {
    return $this->belongsToMany('App\User', 'user_role');
  }
}
