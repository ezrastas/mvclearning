<?php namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Testmongodb extends Eloquent {

  protected $connection = 'mongodb';
  protected $collection = 'restaurant';




}
