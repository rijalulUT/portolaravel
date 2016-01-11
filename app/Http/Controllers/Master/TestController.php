<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
  public function getAgama()
  {
      return 'test';
  }

  public function getAgamatambah()
  {
      return 'test1';
  }

  public function postAgama(){
    
  }
}
