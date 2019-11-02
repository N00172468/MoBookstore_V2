<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T20:17:59+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-02T20:39:58+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function welcome() {
    return view('welcome');
  }

  public function about() {
    return view('about');
  }
}
