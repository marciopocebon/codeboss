<?php

Route::get('/', function() {
    return view('frontend.home');
});

Route::get('/blog', function() {
    return view('frontend.blog');
});

Route::get('/cadastro', function() {
    return view('frontend.cadastro');
});

Route::get('/categorias', function() {
    return view('frontend.categorias');
});

Route::get('/curso', function() {
    return view('frontend.curso');
});

Route::get('/cursos', function() {
    return view('frontend.cursos');
});

Route::get('/pagamento', function() {
    return view('frontend.pagamento');
});