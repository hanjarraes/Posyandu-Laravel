<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PosyanduController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


Route::get('/', [PosyanduController::class, 'index']);

Route::get('/login', function () {
  return view('login');
});

Route::get('/dashboard', function () {
  return view(
    'dashboard',
    [
      "title" => "dasboard",
    ]
  );
});

Route::get('/posyanduSummary', [PosyanduController::class, 'summary']);

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About",
//         "name" => "Muhammad Hanjarraes",
//         "email" => "Hanjarraess@gmail.com",
//         "image" => "https://media-exp1.licdn.com/dms/image/C4E03AQHw1MsXN3_Iog/profile-displayphoto-shrink_800_800/0/1625199535742?e=2147483647&v=beta&t=mJoO9aQ0PuEC6SxZFlvKuZbrVBR05cc95K6YrviU208"
//     ]);
// });

Route::get('/blog', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
