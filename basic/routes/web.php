<?php

use App\Http\Controllers\Basiccontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',action:[ Basiccontroller::class,"home"])->name("home") ;



  /*  $data=[
        'name'=>'reethu',
        'message'=>'hellooo',
        'names'=>['rose','pooja','aparna'
    ]];
   return view('welcome',$data);
   // return view('welcome');   

})->name('home');*/


Route::get('/about', function () {
    return view('about');
    
})->name('about');
Route::get('/contact', function () {
    return view('contact');
    
})->name('contact');

Route::get('/resume', function () {
    return view('resume');
    
})->name('resume');

Route::post("/",function(Request $request){
    $name=$request->input("name");
    $email=$request->input("email");
    return view('welcome',["name"=>$name,"email"=>$email]);
});



 