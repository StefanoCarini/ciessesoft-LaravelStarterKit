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
    return view('auth.login');
});
Route::get('home', function () {
    if(Auth::user())
        return view('home');
    else
        return view('auth.login');
})->name('home');


Auth::routes();

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('areaServizi', 'areaServiziController');
Route::get('areeServizi/{id}/areaUsers', 'AreaServiziController@usersInArea')->name('areaServizi.usersInArea');

Route::get('/login', function (){
    return view('auth.login');
})->name('login');
Route::get('/register', function (){
    $office = \App\Ufficio::orderBy('name')->get();
    return view('auth.register')->with('office', $office);
})->name('register');
Route::get('logout', function (){
    Auth::logout(); // log the user out of our application
    return view('auth.login');
})->name('logout');

Route::get('password', function (){
    return view('auth.passwords.reset');
})->name('password');
Route::get('changePassword', function() {
    return view('auth.passwords.changepassword');
})->name('changePassword');
Route::post('/changePassword','UserController@changePassword')->name('changePassword');

