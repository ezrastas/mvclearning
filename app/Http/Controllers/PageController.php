<?php namespace App\Http\Controllers;

use App\User;
class PageController extends Controller{


  public function index()
  {
      return view('index');
  }

  public function create()
  {
      return view('pages.create');
  }

  public function show()
  {
      return view('pages.read');
  }

  public function update()
  {
      return view('pages.update');
  }

  public function destroy()
  {
      return view('pages.delete');
  }

  public function mongo()
  {
    $userss=User::all();
    foreach($userss as $row){

      echo $row->name;
}

  }




}
