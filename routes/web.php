<?php

use Illuminate\Support\Facades\Route;

Route::get('/product/{id}', function ($id) {
    return "Product ID :" . $id;
});

Route::get('/users/{nisn}', function {$nisn} {
    return "Hello NISN : $nisn
    <br> Nama : Michael Yogy Manginsela
    <br> Kelas : XII RPL B
    <br> <h1>SMKN 8 MALANG</h1>;
});