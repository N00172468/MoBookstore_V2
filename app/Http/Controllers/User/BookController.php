<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-02T21:12:59+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-03T00:15:30+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
  // Authentiction Function:
  public function __construct()
  {
      $this->middleware('auth');
      // $this->middleware('role:user');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //->paginate(5);
      $books = Book::all();

      return view('user.books.index')->with([
        'books' => $books
      ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $book = Book::findOrFail($id);

      return view('user.books.show')->with([
        'book' => $book
      ]);
    }
}
