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

  public function show($id)
  {
      if($id == 'update'){
      return view('pages.update');}
      else{
        if($id == 'delete'){
          return view('pages.delete');}
          else{return view('pages.read');
    }}
  }

  public function read($id){
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
