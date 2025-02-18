<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Article;
use App\Http\Controllers\Home;
use App\Http\Controllers\Photo;
use App\Http\Controllers\Welcome;
use Illuminate\Support\Facades\Route;

Route::resource('photos', Photo::class)->only(['index', 'show']);
Route::resource('photos', Photo::class)->except(['create', 'store', 'update', 'destroy']);

Route::get('/', [Home::class, 'index']);
Route::get('/about', [About::class, 'about']);
Route::get('/articles/{id}', [Article::class, 'articles']);

Route::get('/hello', [Welcome::class, 'hello']);
Route::get('/user/{name?}', fn($name='John') => "Nama Saya $name");

Route::get('/posts/{post}/comments/{comment}', function ($id_post, $id_comment) {
    return "Pos ke-$id_post dan komentar ke-$id_comment";
});

Route::get('/world', fn() => "World");