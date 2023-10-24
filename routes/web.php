<?php


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });
Route::view('/', 'home')->name('home');
// Route::view('/post', 'post')->name('post');
// Route::view('/test', 'test')->name('test');
// Route::view('/user', 'user')->name('user');



Route::get('/test', function () {
    $etudiant = [
        1=> 'Mohamed',
        2=> 'Fatima'
    ];
    return view('test',['etudiant'=> $etudiant]);

});

Route::get('/post/{id_post}', function ($id_post) {
    $posts = [
        1=> 'Java',
        2=> 'CSS',
        3=> 'Python',
    ];
    return view('post',['titre_post'=> $posts[$id_post]]);

});

// Route::view('/home', 'home')->name('home');

// route::get('/home', [userController::class, 'index']);

// Route::get('/user/{name}', function ($name){
//     return view('user',['name'=>$name]);
// })->name('user');

// Route::get('test/{numbre}', function ($numbre) {
//     return view('test',['numbre'=>$numbre]);
// });

// Route::get('user/{name}', [userController::class,'index'])->name('user');
