<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T14:22:25+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-02T17:19:46+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      $user = $request->user();
      $home = 'user.home';

      if ($user->hasRole('admin')) {
        $home = 'admin.home';
      } else {
        $home = 'user.home';
      }

      return redirect()->route($home);
    }
}
