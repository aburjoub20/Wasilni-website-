<?php
//user Controller
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\Driver\BookController as DBookController ;
//Driver Controller
use App\Http\Controllers\User\AuthController; 
use App\Http\Controllers\Driver\AuthController as DAuthController ; 


Route::get('Driver/login', [DAuthController::class, 'index'])->name('login');
Route::post('Driver/post-login', [DAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('Driver/registration', [DAuthController::class, 'registration'])->name('register');
Route::post('Driver/post-registration', [DAuthController::class, 'store'])->name('register.post'); 
Route::get('Driver/logout', [DAuthController::class, 'logout'])->name('logout');
    Route::get('Driver/', function () {return view('/');}); 

Route::group(['middleware' => ['auth:driver']], function() { //Driver Middleware
    Route::get('Driver/book',[DBookController::class ,'index']);
    Route::get('Driver/book/all',[DBookController::class ,'all']);
    Route::get('Driver/book/active',[DBookController::class ,'active']);
    Route::post('Driver/book/store',[DBookController::class ,'store']);

  });
  ///////////////////////////////////////////////////

Route::get('/', function () {return view('index'); }); 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'store'])->name('register.post'); 
Route::post('/contacts', [AuthController::class , 'contact']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {  //user Middleware
Route::get('/book',[BookController::class ,'index']);
Route::get('/book/all',[BookController::class ,'all']);
Route::post('/book/store',[BookController::class ,'store']);
Route::get('/book/active',[BookController::class ,'show']);

}); 