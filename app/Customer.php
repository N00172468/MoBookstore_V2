<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-17T10:28:06+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-17T10:33:57+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user() {
      return $this->belongsTo('App\User');
    }
}
