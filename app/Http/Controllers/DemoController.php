<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DemoController extends Controller
{
  public function greet()
      {
          return '<h1>Hello world!</h1>';
      }
      public function Magazines ($genre=null)
      {
        if ($genre == null) {
          return'Maga index.';
        }
        else {
          return"Magazines in the' {$genre} category."
        }
      }
}
