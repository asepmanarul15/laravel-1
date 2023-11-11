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



Route::get('/home', function () {
    $blog_post =[
        [
            "title" => "Asep Manarul Hidayah",
            "slug" => "Asep Manarul Hidayah",
            "author" => "Latihan Laravel",
            "body" => "Latihan laravel adalah awal an kembali saya untuk mempelajarai programming yang sudah lama saya tinggalkan, semua ini menjadi awal yang baik, dan saya bisa konsisten di bidang terbsebut."
        ],
        [
            "title" => "udin",
            "slug" => "udin",
            "author" => "Latihan Laravel 8",
            "body" => "Latihan laravel adalah awal an kembali saya untuk mempelajarai programming yang sudah lama saya tinggalkan, semua ini menjadi awal yang baik, dan saya bisa konsisten di bidang terbsebut."
        ],
     ];
    return view('home', [
        "title" => "home",
        "blog" => $blog_post
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Saya Asep Manarul Hidayah, S.Kom",
        "email" => "asepmanarul13@gmail.com",
        "image" => "bg_login.png"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title"=> "dashboard"
    ]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//halaman single post
Route::get('home/{slug}', function($slug) {
    $blog_post =[
        [
            "title" => "Asep Manarul Hidayah",
            "slug" => "Asep Manarul Hidayah",
            "author" => "Latihan Laravel",
            "body" => "Latihan laravel adalah awal an kembali saya untuk mempelajarai programming yang sudah lama saya tinggalkan, semua ini menjadi awal yang baik, dan saya bisa konsisten di bidang terbsebut."
        ],
        [
            "title" => "udin",
            "slug" => "udin",
            "author" => "Latihan Laravel 8",
            "body" => "Latihan laravel adalah awal an kembali saya untuk mempelajarai programming yang sudah lama saya tinggalkan, semua ini menjadi awal yang baik, dan saya bisa konsisten di bidang terbsebut."
        ],
     ];

$new_post = [];
foreach($blog_post as $post){
    if($post["slug"] == $slug) {
        $new_post = $post; 
    }
}

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
}); 