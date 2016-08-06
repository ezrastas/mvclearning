<?php namespace App\Http\Controllers;

class PageController extends Controller{

  public function welcome()
  {
      return view('welcome');
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
}
