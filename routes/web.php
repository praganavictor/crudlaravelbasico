<?php
/*
Route::group(['prefix' => 'painel','middleware' => 'auth'], function(){
	Route::get('/users', function(){
		return 'controle de usuarios';
	});
	Route::get('/financeiro', function(){
		return 'Painel financeiro';
	});
	Route::get('/', function(){
		return 'Dashboard';
	});
});

Route::get('/login', function(){
	return 'login';
});

Route::get('/categoria2/{idCat?}', function($idCat='null'){
	return "Posts da categoria ($idCat)";
});

Route::get('/categoria/{idCat}', function($idCat){
	return "Posts da categoria ($idCat)";
});

Route::get('/nome/nome2/home3', function(){
	return 'Rota grande';
})->name('rota.nomeada');

Route::any('/any', function(){
	return 'Rota any';
});

Route::match(['get', 'post'], '/match', function(){
	return 'Route match';
});

Route::post('/post', function() {
	return 'route post';
});

Route::get('/contato', function () {
	return 'Contato';
});

Route::get('/empresa', function () {
	return view('empresa');
});
*/
Route::get('/painel/produtos/tests', 'Painel\ProdutoController@tests');
Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){
	Route::get('/', 'SiteController@index');
	Route::get('/contato', 'SiteController@contato');
	Route::get('/categoria/{id?}', 'SiteController@categoria');
	//Route::get('/categoria2/{id?}', 'SiteController@categoria')->middleware('auth');
});