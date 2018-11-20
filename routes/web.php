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

Route::get('/', function () { return view('pages.home'); })->name('homepage');
Route::get('/team', function () { return view('pages.team'); })->name('team');
//Route::get('/office', function () { return view('pages.office'); })->name('office');
Route::get('/office', ['uses'=>'OfficeController@generateDocx', 'as'=>'office' ]);
Route::get('/map', function () { return view('pages.map'); })->name('map');
Route::get('/vue', function () { return view('pages.vue'); })->name('vue');
Route::get('/teamVueJs', function () { return view('pages.team-vue-js'); })->name('teamVueJs');