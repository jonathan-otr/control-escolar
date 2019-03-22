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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nuevo_alumno', function () {
    return view('nuevo_alumno');
})->name('nuevo_alumno');

Route::post('/guardar_nuevo_alumno', 'alumnosController@guardar_nuevo_alumno')->name('guardar_nuevo_alumno');

Route::get('/editar_alumnos', 'alumnosController@editar_alumnos')->name('editar_alumnos');

Route::get('/editar_alumno/{matricula}', 'alumnosController@editar_alumno')->name('editar_alumno');

Route::post('/actualizar_alumno', 'alumnosController@actualizar_alumno')->name('actualizar_alumno');

Route::get('/eliminar_alumno/{matricula}', 'alumnosController@eliminar_alumno')->name('eliminar_alumno');


Route::get('/nuevo_curso', function () {
    return view('nuevo_curso');
})->name('nuevo_curso');

Route::post('/guardar_nuevo_curso', 'cursosController@guardar_nuevo_curso')->name('guardar_nuevo_curso');

Route::get('/editar_cursos', 'cursosController@editar_cursos')->name('editar_cursos');

Route::get('/editar_curso/{id_curso}', 'cursosController@editar_curso')->name('editar_curso');

Route::post('/actualizar_curso', 'cursosController@actualizar_curso')->name('actualizar_curso');

Route::get('/eliminar_curso/{id_curso}', 'cursosController@eliminar_curso')->name('eliminar_curso');
