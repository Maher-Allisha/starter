<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    class ThirdController extends Controller
{

        /**
         * ThirdController constructor.
         */
        public function __construct()
        {
            $this-> middleware ('auth');
        }


    public function showme1 ()
    { return 'hello 1 ' ;}


    public function showme2()
    { return 'hello 2 ' ;}

    public function showme3()
    { return 'hello 3 ' ;}


}
