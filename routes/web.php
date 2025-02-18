<?php

use Illuminate\Support\Facades\Route;

Route::get('/user/{name?}', fn($name='John') => "Nama Saya $name");

Route::get('/articles/{id}', function ($id_article) {
    return "Halaman Artikel dengan ID $id_article.";
});

Route::get('/posts/{post}/comments/{comment}', function ($id_post, $id_comment) {
    return "Pos ke-$id_post dan komentar ke-$id_comment";
});

Route::get('/', fn() => "Selamat Datang");
Route::get('/hello', fn() => "Hello");
Route::get('/world', fn() => "World");

Route::get('/about', function () {
    return "
        NIM\t\t\t: 2341720115
        <br />
        Nama\t\t\t: Rafi Abiyyu Airlangga
    ";
});