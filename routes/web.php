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

    return view('huan in');
});

Route::post('/logiadasdasn', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admiasdasdn'
        && $request->password == 'aasdasddmin') {
        return view('ahjsdgahjs');
    }
    return view('login_error');
});

Route::get('/hjadgasdjhagdasjgasjhasgd', function (Illuminate\Http\Request $request) {

    return view('login_error');
});

Route::post('/hiepchelsea', function (Illuminate\Http\Request $request) {

    return view('login_error');
});

Route::post('/logiadasdasn', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admiasdasdn'
        && $request->password == 'aasdasddmin') {
        return view('ahjsdgahjsdgasjhdgsadjasdasdgasdjhsadghjsadgsajdasgjh');
    }

    return view('login_error');
});
