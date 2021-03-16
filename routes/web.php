<?php
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Maincontroller;
use App\Http\Controllers\Productcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Session;


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

Route::get('/', [Productcontroller::class, 'index'])->name('product.index');


Auth::routes();

Route::get('/main/{name?}', [MainController::class, 'index'])->name('main');
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/posts', [clientController::class,'getallpost'])->name('posts.getallpost');
Route::get('/posts/{id}', [clientController::class,'getpostid'])->name('posts.getpostid');
Route::get('/addposts', [clientController::class,'addpost'])->name('posts.addpost');
Route::get('/updateposts', [clientController::class,'updatepost'])->name('posts.updatepost');
Route::get('/login', [logincontroller::class,'index'])->name('login.index');
Route::POST('/login', [logincontroller::class,'loginsubmit'])->name('login.submit');

Route::get('/session/get', [SessionController::class,'getsession'])->name('session.get');
Route::get('/session/set', [SessionController::class,'setsession'])->name('session.set');
Route::get('/session/remove', [SessionController::class,'deletesession'])->name('session.delete');
Route::get('/post', [postcontroller::class,'getallpost'])->name('post.getallpost');
Route::get('/addpost', [postcontroller::class,'addpost'])->name('post.addpost');
Route::post('/submitpost', [postcontroller::class,'submitpost'])->name('post.submitpost');
Route::get('/post/{id}', [postcontroller::class,'getpostbyid'])->name('post.getpostbyid');
Route::get('/deletepost/{id}', [postcontroller::class,'deletebyid'])->name('post.deletepost');
Route::get('/editpost/{id}', [postcontroller::class,'editpost'])->name('post.editpost');
Route::post('/upost', [postcontroller::class,'updatepost'])->name('post.updatepost');
Route::get('/injoin', [postcontroller::class,'innerjoin'])->name('post.innerjoin');
Route::get('/getpostmodel', [postcontroller::class,'getpostmodel'])->name('post.getmodel');