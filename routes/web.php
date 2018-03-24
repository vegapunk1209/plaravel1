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

Route::get('/miprimeraruta', function () {
    return view('miprimeraruta');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


Route::group(['middleware' => 'auth'], function () {

    // Definiendo una ruta de reporte 
    Route::get('/Reportes/ReportedeUsuarios', 'ReporteController@verreporteusuario')->name('ReportedeUsuarios');

    Route::get('/Reportes/rptusuarios/{id}', 'ReporteController@rptusuarios');
    

    //REPORTES DE UBICACIONES
    Route::get('/Reportes/ReportedeUbicaciones', 'ReporteController@verreporteubicacion')->name('ReportedeUbicaciones');

    Route::get('/Reportes/rptubicaciones/{id}', 'ReporteController@rptubicaciones');
    

    // LISTADOS
    Route::get('/UbicacionesListar', 'UbicacionController@UbicacionesListar')->name('UbicacionesListar');

    Route::get('/UsuariosListar', 'UsersController@UsuariosListar')->name('UsuariosListar');

    Route::get('/MonedasListar', 'MonedaController@MonedasListar')->name('MonedasListar');

    Route::get('/CuartosListar', 'CuartoController@CuartosListar')->name('CuartosListar');

    Route::get('/ZonasListar', 'ZonaController@ZonasListar')->name('ZonasListar');    






    Route::get('/ubicaciones', 'UbicacionController@gestionarubicaciones')->name('ubicaciones');

    Route::post('/ubicacion/registrar', 'UbicacionController@registrarubicaciones')->name('ubicacion/registrar');

    Route::post('/ubicacion/editarguardar', 'UbicacionController@editarguardar')->name('ubicacion/editarguardar');


        // EJemplo BootGRid Basico

    
    Route::get('/UbicacionesBusqueda', 'UbicacionController@UbicacionesBusqueda')->name('UbicacionesBusqueda');

    Route::post('/ubicacion/consultabusqueda', 'UbicacionController@consultabusqueda')->name('ubicacion/consultabusqueda');


    Route::get('/Ubicaciones/Ver/{id}', 'UbicacionController@UbicacionesVer')->name('UbicacionesVer');

    Route::get('/Ubicaciones/Editar/{id}', 'UbicacionController@UbicacionesEditar')->name('UbicacionesEditar');

    Route::get('/Ubicaciones/Imprimir/{id}', 'UbicacionController@UbicacionesImprimir')->name('UbicacionesImprimir');

    Route::post('/Ubicaciones/Listar', 'UbicacionController@UbicacionesMostrarRegistros');

    Route::post('Zona/Listar_Provincias_x_Departamento/{id}',['as' => 'Zona/Listar_Provincias_x_Departamento', 'uses' => 'ZonaController@Listar_Provincias_x_Departamento']);

    Route::post('Zona/Listar_Distritos_x_Provincia/{id}',['as' => 'Zona/Listar_Distritos_x_Provincia', 'uses' => 'ZonaController@Listar_Distritos_x_Provincia']);

    Route::post('Estilos/Listar_Estilos_x_Tipo/{id}',['as' => 'Estilos/Listar_Estilos_x_Tipo', 'uses' => 'UbicacionController@Listar_Estilos_x_Tipo']);   

    Route::post('Ubicaciones/Zona/Listar_Provincias_x_Departamento/{id}',['as' => 'Zona/Listar_Provincias_x_Departamento', 'uses' => 'ZonaController@Listar_Provincias_x_Departamento']);

    Route::post('Ubicaciones/Zona/Listar_Distritos_x_Provincia/{id}',['as' => 'Zona/Listar_Distritos_x_Provincia', 'uses' => 'ZonaController@Listar_Distritos_x_Provincia']);

    Route::post('Ubicaciones/Estilos/Listar_Estilos_x_Tipo/{id}',['as' => 'Estilos/Listar_Estilos_x_Tipo', 'uses' => 'UbicacionController@Listar_Estilos_x_Tipo']);

    Route::get('Ubicaciones/ImpresionUbicacion/{id}', 'UbicacionController@ImpresionUbicacion');



});
