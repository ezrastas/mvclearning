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

  public function read()
  {
      return view('pages.read');
  }

  public function update()
  {
      return view('pages.update');
  }

  public function delete()
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
