<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminPanel\CategoryController;

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

//Route::get('/', function () {
//  return view('welcome');
//});

Route::view('/loginuser','home.login')->name('loginuser');
Route::view('/registeruser','home.register')->name('registeruser');
Route::get('/logoutuser',[HomeController::class,'logout'])->name('logoutuser');
Route::view('/loginadmin','admin.login')->name('loginadmin');
Route::post('/loginadmincheck',[\App\Http\Controllers\AdminPanel\HomeController::class,'loginadmincheck'])->name('loginadmincheck');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/treatment/{tid}',[HomeController::class,'treatment'])->name('treatment');
Route::get('/categorytreatments/{id}/{slug}',[HomeController::class,'categorytreatments'])->name('categorytreatments');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/references',[HomeController::class,'references'])->name('references');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/messageStore',[HomeController::class,'messageStore'])->name('messageStore');
Route::get('/faq',[HomeController::class,'faq'])->name('faq');
Route::post('/storecomment/{tid}',[HomeController::class,'storecomment'])->name('storecomment');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function (){

    Route::prefix('userx')->name('userx.')->controller(\App\Http\Controllers\UserController::class)->group(function (){
        Route::get('/','index')->name('index');
        Route::get('/reviews','reviews')->name('reviews');
        Route::get('/reviewdestroy/{id}','reviewdestroy')->name('reviewdestroy');
    });

    Route::middleware('admin')->prefix('/admin')->name('admin.')->controller(AdminController::class)->group(function (){
        //-----------------Admin Panel-------------------

        Route::get('/','index')->name('index');
        Route::get('/setting','setting')->name('setting');
        Route::post('/settingUpdate/{sid}','settingUpdate')->name('settingUpdate');


        Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function (){
            //-----------------Category Route-------------------
            Route::get('/','index')->name('index');
            Route::get('/create','create')->name('create');
//Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');

        });
        //-----------------Admin Panel-Treatment-------------------
        Route::prefix('/treatment')->name('treatment.')->controller(\App\Http\Controllers\AdminPanel\TreatmentController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/create/','create')->name('create');
            Route::post('/store/','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        //-----------------Admin Panel-Image Gallery-------------------
        Route::prefix('/image')->name('image.')->controller(\App\Http\Controllers\AdminPanel\ImageController::class)->group(function (){
            Route::get('/{tid}','index')->name('index');
            Route::post('/store/{tid}','store')->name('store');
            Route::get('/edit/{tid}/{id}','edit')->name('edit');
            Route::post('/update/{tid}/{id}','update')->name('update');
            Route::get('/destroy/{tid}/{id}','destroy')->name('destroy');
        });
        Route::prefix('/message')->name('message.')->controller(\App\Http\Controllers\AdminPanel\MessageController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        Route::prefix('/faq')->name('faq.')->controller(\App\Http\Controllers\AdminPanel\FaqController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::post('/store','store')->name('store');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        Route::prefix('/comment')->name('comment.')->controller(\App\Http\Controllers\AdminPanel\CommentController::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
        });
        Route::prefix('/user')->name('user.')->controller(\App\Http\Controllers\AdminPanel\AdminUserConroller::class)->group(function (){
            Route::get('/','index')->name('index');
            Route::post('/update/{id}','update')->name('update');
            Route::post('/addrole/{id}','addrole')->name('addrole');
            Route::get('/show/{id}','show')->name('show');
            Route::get('/edit/{id}','show')->name('show');
            Route::get('/destroy/{id}','destroy')->name('destroy');
            Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
        });
    });

});



