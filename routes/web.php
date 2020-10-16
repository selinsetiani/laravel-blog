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

Route::get('/', function () {
    return view('index');
});

Route::get('/product', function () {

    return view('product');
});

Route::get('/contact', function () {

    return view('contact');
});

Route::get('/about', function () {

    return view('about');
});



Route::get('/blog-kapal', function () {

    return view('blog-kapal');
});

//user profile
Route::get('/profile', function () {

    return view('/dashboard/profile');
});
Route::PUT('/myprofile/{id}', 'UserController@updateprofile');


//Blog Route
Route::get('/blog', 'BlogController@blog');

Route::get('/blogdetail/{blogmore}/blogdetail', 'BlogController@blogdetail')->name('blog-detail');



Route::get('/admin', 'PostController@grafik');

Route::get('/addcategories', function () {

    return view('dashboard/addcategories');
});


Route::get('/login', function () {

    return view('dashboard/login');
});


Route::get('/chart', 'ChartController@chart'); // Route Chart

// Route reosource Controller


Route::group(['middleware' => 'role:admin,User'], function() {
    
    Route::resource('/user', 'UserController');
    Route::resource('/permission', 'PermissionController');
    Route::resource('/role', 'RoleController');
    
});
 
// Blog post route
Route::resource('/categories', 'CategoriesController');    
Route::resource('/allpost', 'PostController');
Route::get('/mypost', 'PostController@data');



Route::get('/adduser', 'UserController@adduser');

Route::get('/addrole', 'RoleController@addrole');

//ERROR PAGE
Route::get('/notfound',function(){
    return view('dashboard/errors');
})->name('notfound');

//search Route
Route::get('/search', 'PermissionController@search');
Route::get('/rolesearch', 'RoleController@search');
Route::get('/postsearch', 'PostController@search');

Route::get('/addpermission', 'PermissionController@addpermission');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
