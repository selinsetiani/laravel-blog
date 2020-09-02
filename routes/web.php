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

Route::get('/blog', function () {

    return view('blog');
});

Route::get('/blog-kapal', function () {

    return view('blog-kapal');
});

// dashboard //

// Route::get('/admin', function () {

//     return view('dashboard/admin');
// });

// Route::get('/newpostku', function () {

//     return view('dashboard/newpost');
// });

// Route::get('/allpost', function () {

//     return view('dashboard/allpost');
// });

// Route::get('/categories', function () {

//     return view('dashboard/categories');
// });

Route::get('/mypost', 'PostController@data');

Route::get('/admin', 'PostController@grafik');

Route::get('/addcategories', function () {

    return view('dashboard/addcategories');
});

Route::get('/chart', 'ChartController@chart'); // Route Chart

// Route reosource Controller

Route::resource('/categories', 'CategoriesController');

Route::resource('/allpost', 'PostController');