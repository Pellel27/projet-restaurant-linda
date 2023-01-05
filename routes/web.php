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

Route::get('/', function () {
    return view('Home');
})->name('Home');

Route::get('/Bienvenue/{name}', function ($name) {
//traitement des données
    $name = '"'.$name.'"';
    
    return view('Bienvenue', [
        // passage de variables à une vue
        'name'=> $name,
        ]) ;
    })->name('Bienvenue');
    Route::get('/restaurant', function () {
        return view('restaurant');
    })->name('restaurant');
    
    //@todo créer les routes pour les pages Menu, Contact, Reservation et Mentions légales 
    Route::get('/Menu1', function () {
        return view('Menu1');
    })->name('Menu1');
    
    Route::get('/contact1', function () {
        return view('contact1');
    })->name('contact1');
    
    Route::get('/reservation1', function () {
        return view('Reservation1');
    })->name('Reservation1');
    
    Route::get('/Mention-legale', function () {
        return view('Mention-legale');
    })->name('Mention-legale');
