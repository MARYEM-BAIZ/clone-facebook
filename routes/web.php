<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/template',['uses'=>'PublicationController@template','as'=>'page.template']);

Route::get('/accueil',['uses'=>'PublicationController@accueil','as'=>'page.accueil']);

Route::get('/settings',['uses'=>'PublicationController@settings','as'=>'page.settings']);

Route::get('/profile',['uses'=>'PublicationController@profile','as'=>'page.profile']);

Route::get('/publier',['uses'=>'PublicationController@publier','as'=>'page.publier']);

Route::post('/publier',['uses'=>'PublicationController@publierpub','as'=>'page.publierpub']);

Route::post('/publiercomment/{id}',['uses'=>'CommentaireController@publiercomment','as'=>'page.publiercomment']);

Route::post('/like/{id}',['uses'=>'LikeController@publierlike','as'=>'page.like']);

Route::post('/save/{id}',['uses'=>'EnregistrementController@publiersave','as'=>'page.save']);

Route::get('/pagelogout',['uses'=>'PublicationController@pagelogout','as'=>'page.logout']);

Route::post('/modiname',['uses'=>'PublicationController@modifiername','as'=>'page.modifiername']);

Route::post('/modiemail',['uses'=>'PublicationController@modifieremail','as'=>'page.modifieremail']);

Route::post('/modiimage',['uses'=>'PublicationController@modifierimage','as'=>'page.modifierimage']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
