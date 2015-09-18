<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin/categories',['as' =>'admin.categories.index','uses'=>'CategoriesController@index']);
Route::get('admin/categories/create', ['as' =>'admin.categories.create','uses'=>'CategoriesController@create']);
Route::post('admin/categories/store', ['as' =>'admin.categories.store','uses'=>'CategoriesController@store']);
Route::get('admin/categories/edit/{id}', ['as' =>'admin.categories.edit','uses'=>'CategoriesController@edit']);
Route::post('admin/categories/update/{id}', ['as' =>'admin.categories.update','uses'=>'CategoriesController@update']);

/*
Route::get('test', function(){
    //Assim esta utilizando de modo concreto. Mas para utilizar outro ORM como Doctrine
    //$repository = app()->make('CodeDelivery\Repositories\CategoryRepositoryEloquent'); //Est� falando para o Conteiner de Dependece Injection j� esta instanciando
    $repository = app()->make('CodeDelivery\Repositories\CategoryRepository');
    return $repository->all();
});
*/