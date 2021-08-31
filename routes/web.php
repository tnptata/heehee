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
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello Laravel";
});

Route::get('/hello/array', function () {
    return [
        'message' => 'Hello Laravel',
        'success' => true,
        'error' => false,
        'number' => 10
    ];
})->name('hello.array');

Route::get('/posts/{id?}', function ($id = null) {
    if($id === null){
        return "All Posts";
    }
    return "Post ID: " . $id;
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Your Name', 
        'info' =>[
            'address' => '<b>Kasetsart</b> University',
            'email' => 'contact@ku.th<script>alert("Attack Code")</script>'
        ]
    ]);
});
