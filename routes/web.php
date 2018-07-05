<?php

/*
**	Routes menant au menu d'accueil
**	et au gestionnaire.	
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/board', 'PostsController@index')->name('board');

/*
**	Routes menant à l'interface de création
**	de notes.	
*/

Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/create', 'PostsController@store');

/*
**	Routes menant à l'interface d'enregistrement
**	d'un nouvel utilisateur.
*/

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

/*
**	Routes menant à l'interface de connexion
**	d'un utilisateur.
*/

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');

/*
**	Route permettant la déconnexion 
**	d'un utilisateur.
*/

Route::get('/logout', 'SessionsController@destroy');

/*
**	Routes menant à l'interface d'édition
**	d'une note.
*/

Route::get('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/edit/{id}', 'PostsController@update')->name('posts.update');

/*
**	Routes permettant la destruction d'un compte
**	utilisateur / destruction de note.
*/

Route::get('/posts/delete/{id}', 'PostsController@delete')->name('posts.delete');
Route::get('/board/delete/{id}', 'RegistrationController@delete')->name('board.delete');