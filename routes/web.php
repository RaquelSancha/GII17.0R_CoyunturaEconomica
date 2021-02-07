<?php
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

Route::post('/loginUsuarios','UserController@login');

Route::get('/help', function(){
	return view('/help/help');
});
Route::get('/helpGuest', function(){
	return view('/help/helpGuest');
});
Route::get('/datosINE', function(){
	return view('/datosINE/menu');
});

Route::get('/datosINE/subirdatos', function(){
	return view('/datosINE/subirdatos');
});

Route::get('/datosINE/actualizar', 'DatosINEController@actualizarDatos');

Route::post('/datosINE/show/{id}', 'DatosINEController@show');


Route::post('/datosINE/confirmarsubida', 'DatosINEController@organizarDatos');

Route::post('/datosINE/insertarDatos/{id}', 'DatosINEController@insertarDatos');


Route::get('/equipo', function(){
	return view('/equipo');
});

Route::get('/user/editarPerfil/{id}', 'UserController@edit');

Route::post('/confirm/user/editarPerfil/{id}', 'UserController@update');

Route::get('/register/index',  'RegisterController@show');

Route::post('/register/solicitud', 'RegisterController@register');

Route::get('/register/aceptar/{id}', 'RegisterController@aceptar');

Route::get('/register/editar/{id}', 'RegisterController@edit');

Route::get('/register/declinar/{id}', 'RegisterController@declinar');

Route::get('/register/borrar/{id}', 'RegisterController@borrar');

Route::post('/confirm/user/edit/{id}', 'RegisterController@update');

Route::get('/homeGuest', function(){
	return view('/homeGuest');
});

Route::get('/form/new', 'TableController@formNew');


Route::get('/form/create', 'FormController@create');

Route::get('/form/choose', function(){
	return view('/form/choose');
});

Route::get('/data/choose', function(){
	return view('/data/choose');
});

Route::get('/data/create/ambito/', function(){
	return view('/data/create/ambito');
});

Route::get('/form/{id}/deleteAmbito','TableController@showDeleteAmbito');

Route::get('/form/{id}/deleteYear','TableController@showDeleteYear');
		
Route::get('/form/{id}/deleteCategoria','TableController@showDeleteCategoria');

Route::get('/form/{id}', 'FormController@show');


Route::post('/tables/new','TableController@new');

Route::post('/tables/create','TableController@create');

Route::get('/tables', 'VariableController@index');

Route::post('/tables/{id}', 'TableController@show');

Route::get('/tables/{id}/edit','TableController@edit');

Route::post('/tables/{id}/exportar','TableController@exportar');

Route::get('/tables/{id}/cambiarDescripcion','TableController@cambiarDescripcion');

Route::get('/tables/{id}/insertAmbito','TableController@showInsertAmbito');

Route::get('/tables/{id}/insertYear','TableController@showInsertYear');

Route::get('/tables/{id}/insertCategoria','TableController@showInsertCategoria');

Route::get('/tables/{id}/delete','TableController@delete');

Route::post('/confirm/save', 'TableController@save');

Route::post('/confirm/insert', 'TableController@insert');

Route::post('/confirm/insertAmbito/{id}', 'TableController@updateInsertAmbito');

Route::post('/confirm/insertYear/{id}', 'TableController@updateInsertYear');

Route::post('/confirm/insertCategoria/{id}', 'TableController@updateInsertCategoria');

Route::post('/confirm/deleteAmbito/{id}', 'TableController@updateDeleteAmbito');

Route::post('/confirm/deleteYear/{id}', 'TableController@updateDeleteYear');

Route::post('/confirm/deleteCategoria/{id}', 'TableController@updateDeleteCategoria');

Route::post('/confirm/{id}', 'TableController@update');


Route::post('/confirm/data/edit/variable/{id}', 'DataController@updateVariable');

Route::post('/confirm/data/edit/supercategoria/{id}', 'DataController@updateSuperCategoria');

Route::post('/confirm/data/edit/categoria/{id}', 'DataController@updateCategoria');

Route::post('/confirm/data/edit/ambito/{id}', 'DataController@updateAmbito');


Route::get('/data/index/variables', 'DataController@indexVariable');

Route::get('/data/index/supercategoria', 'DataController@indexSuperCategoria');

Route::get('/data/index/categoria', 'DataController@indexCategoria');

Route::get('/data/index/ambito', 'DataController@indexAmbito');



Route::get('/data/edit/variables/{id}', 'DataController@editVariable');

Route::get('/data/edit/supercategorias/{id}', 'DataController@editSuperCategoria');

Route::get('/data/edit/categorias/{id}', 'DataController@editCategoria');

Route::get('/data/edit/ambito/{id}', 'DataController@editAmbito');



Route::get('/data/create/supercategorias/', 'DataController@createSuperCategoria');

Route::get('/data/create/categorias/', 'DataController@createCategoria');





Route::post('confirm/data/new/supercategoria', 'DataController@newSuperCategoria');

Route::post('confirm/data/new/categoria', 'DataController@newCategoria');

Route::post('confirm/data/new/ambito', 'DataController@newAmbito');



Route::get('data/delete/supercategorias/{id}', 'DataController@deleteSuperCategoria');


Route::get('data/delete/categorias/{id}', 'DataController@chooseDeleteCategoria');

Route::get('data/delete/categorias/full/{id}', 'DataController@DeleteCategoria');

Route::get('data/delete/categorias/variable/{id}', 'DataController@chooseVariableDeleteCategoria');

Route::post('/data/delete/variables/categoria/{id}', 'DataController@DeleteCategoriaVariable');


Route::get('data/delete/ambito/{id}', 'DataController@chooseDeleteAmbito');

Route::get('data/delete/ambito/full/{id}', 'DataController@DeleteAmbito');

Route::get('data/delete/ambito/variable/{id}', 'DataController@chooseVariableDeleteAmbito');

Route::post('/data/delete/variables/ambito/{id}', 'DataController@DeleteAmbitoVariable');

Route::get('/prediccionDatos', 'VariableController@index2');

Route::get('/prediccionDatos/{id}', 'PrediccionDatosController@show');

//Route::post('prediccionDatos/predecir/{id}','PrediccionDatosController@prueba');

Route::post('prediccionDatos/predecir/{id}','PrediccionDatosController@predecir');
