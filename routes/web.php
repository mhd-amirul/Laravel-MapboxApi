<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\dashboardPostController;
use App\Http\Controllers\postController;
use App\Http\Controllers\SignController;
use App\Models\Category;
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

// Proses Login Registrasi
Route::get('/register',[SignController::class, 'Register'])->middleware('guest');
Route::post('/register',[SignController::class, 'store']);

// Proses Login 
Route::get('/login',[SignController::class, 'Signin'])->name('login')->middleware('guest');
Route::post('/login',[SignController::class, 'authenticate']);

// Proses Logout
Route::post('/logout',[SignController::class, 'logout']);

// akses halaman dashboard
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [dashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', dashboardPostController::class)->middleware('auth');

// akses halaman home
Route::get('/', function () {
    return view('Home',[
        "title" => "Home"
    ]);
});

// akses halaman about
Route::get('/About', function () {
    return view('About',[
        "title" => "About",
        "name" => "Muhammad Amirul",
        "email" => "amirul@pnl.com",
        "image" => "Amirul.JPG"
    ]);
});

// akses halaman All Blog
Route::get('/Blog', [postController::class, 'index']);

// akses halaman Detail Blog
Route::get('/posts/{post:slug}', [postController::class, 'show']);

// akses halaman All Category
Route::get('/categories', function ()
{
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});

Route::resource('/dashboard/categories', AdminController::class)->except('show')->middleware('admin');






// =======================================================================================================================
// Route::get('/categories/{category:slug}', function(Category $category)
// {
//     return view('Blog', [
//         'active' => 'posts',
//         'title' => "Post By Category : $category->name",
//         'posts' => $category->posts->load('category', 'author'),
//     ]);
// });
// Route::get('/author/{author:username}', function(User $author)
// {
//     return view('Blog', [
//         'active' => 'posts',
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });