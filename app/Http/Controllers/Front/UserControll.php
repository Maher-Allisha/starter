<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserControll extends Controller
{
       public function use ()
   {
       return 'maher allisha';
   }

   public function  showif ()

   {
       /*
              $obj = new \stdClass();

              $obj-> name = 'maher';
              $obj-> lastname= 'allisha';
              $obj-> age=30;
              $obj-> gender='male';
       */
       return view('welcome')->with('name' , 'maher');
   }

    public function showforeach   ()

    {

             $data=['a' => 'maher ' , 'b'=>'waddah']; /* or it can be $data=['maher ' , 'waddah']; */

        return view('welcome' , compact('data'));
    }
}
