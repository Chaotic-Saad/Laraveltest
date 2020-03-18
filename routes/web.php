<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/1', function () { 

    return view('1');
});

Route::get('/2', function () { 

    return view('2', ["FS8" => "kk" , "table" => [1,2,3,4] , "test"=>[] ]); 
});

Route::get('/3', function () { 

    return view('3');
});

Route::get('/4', function () { 

    return view('4');
});


Route::get('layouts.home', function () { 

    return view('home');
});

Route::post('4', function () { 



    //VALIDATION//



    Request()->validate([
        'email' => 'required|max:20000',
        'password' => 'required',
        'photo'=>'required'
        /* 'picture' => 'required|max:20000|mimes:jpg,png' */
    ]);


    //TRAITEMENT//

         $image = request('image');
         
    // $image->getClientOriginalName() : nom orignal de la photo

     $file_name = time() . '.'. $image->getClientOriginalExtension();
     $image->move(public_path('public'), $file_name);

     $password = request('password');
     $email = request('email');
     request()->session()->put('email', $email);
     Cookie::queue('email',$email,30);

     $upload= request()->file('photo');
     $upload= request()->photo;
            if (request()->file('photo')->isValid()) {
                $message = "YEES";
            }
     return view('4', compact ('message','email','password')); 
     /*return view('3', ["email"=>request('email')]); */
     
});