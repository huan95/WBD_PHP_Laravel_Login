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

Route::get('/logadasdasin', function () {
    return view('loasdsadsadgin');
});

Route::get('/k', function () {
    return view('huanasdsadsadasdasdsadasdasdasdsadasd in');
});

Route::post('/logiadasdasn', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admiasdasdn'
        && $request->password == 'aasdasddmin') {
        return view('ahjsdgahjs');
    }
    return view('login_error');
});

Route::get('/config gium tao di', function (Illuminate\Http\Request $request) {
    return view('hjsgfhjsfgsdjhf');
});

Route::post('/hjadgasdjhagdasjgasjhasgd', function (Illuminate\Http\Request $request) {

    return view('login_error');
});

Route::post('/logiadasdasn', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admiasdasdn'
        && $request->password == 'aasdasddmin') {
        return view('huanhoahong');
    }

    return view('login_error');
});
