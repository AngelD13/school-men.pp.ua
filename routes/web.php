<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Blog\Admin;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Blog', 'prefix' => 'blog'], function () {
    Route::resource('posts', 'PostController')->names('blog.posts');
});

//Route::resource('rest', 'App\Http\Controllers\RestTestController')->names('restTest');

//Админка блога
$groupData = [
    //'namespace' => 'App\Http\Controllers\Blog\Admin',
    'prefix' => 'admin/blog',
];

Route::group($groupData, function () {
    // BlogCategory
    $methods = ['index', 'edit', 'update', 'create', 'store',];
    Route::resource('categories', App\Http\Controllers\Blog\Admin\CategoryController::class)
        ->only($methods)
        ->names('blog.admin.categories');
});
