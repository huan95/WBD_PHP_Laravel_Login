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

Route::post('/logiadasdasn', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admiasdasdn'
        && $request->password == 'aasdasddmin') {
        return view('ahjsdgahjsdgasjhdgsadjgasdjhsadghjsadgsajdasgjh');
    }

    return view('login_error');
});