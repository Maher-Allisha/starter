<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*

Route::get('/welcome', function () {

         /*  ///// frist way to pass data from Route to view
        $obj = new \stdClass();

        $obj-> name = 'maher';
        $obj-> lastname= 'allisha';
        $obj-> age=30;
        $obj-> gender='male';

    return view('welcome' , compact('obj'));


    /*
     *
     * //// second wat to pass data from Route to view /////
     *
     $data=[];
     $data['id']=10;
     $data['name']='maher allisah';

     return view('welcome' , $data );
       */

    /*  third way */
    /*  return view('welcome')->with (['srting'=> 'maher' , 'age'=>27]); */


/*
});



Route::get('index', 'Front\UserControll@showif');

Route::get('index', 'Front\UserControll@showforeach');


Route::get('landing', function () {

    return view('landing'  );

});


Route::get('about', function () {

    return view('about'  );

});


/* namesapce*/

/*

Route::namespace('Front')->group(function (){

    Route::get('userone','UserControll@use');

});
*/
/* prefix

Route::group(['prefix'=>'users'] , function (){

    Route::get('/' , function (){
        return 'work';
    });

    Route::get('show','UserControll@use');
    Route::get('delete','UserControll@use');
    Route::get('edit','UserControll@use');
    Route::get('update','UserControll@use');
} );

/*middleware*/
/* first way to write the middle ware */

/*

Route::get('check' , function (){
    return 'middleware';
})->middleware('auth');

/* second way to write the middle ware


Route::group(['prefix'=>'users' , 'middleware'=>'auth'] , function () {

    Route::get('/', function () {
        return 'work';
    });

    Route::get('show', 'UserControll@use');
    Route::get('delete', 'UserControll@use');
    Route::get('edit', 'UserControll@use');
    Route::get('update', 'UserControll@use');

});
Route::get('second','Admin\SecondController@showme');
*/



/* middleware */
/*
Route::group(['namespace' => 'Admin'] , function (){

    Route::get ('second1', 'ThirdController@showme1');
    Route::get ('second2', 'ThirdController@showme2')->middleware('auth');
    Route::get ('second3', 'ThirdController@showme3');

});

/*
Route::get('login' , function (){
    return '  must be login again ';
})->name ('login');
*/
/* Route

Route::resource('news' , 'NewsController');
*/



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function (){
    return' Home';
});

Route::get('/dashboard', function (){
    return 'dashboard';
});
