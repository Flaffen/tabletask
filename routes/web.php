<?php

use App\Models\Thing;
use App\Imports\ThingsImport;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('things', ['things' => Thing::all()]);
});

Route::post('/things', function (Request $request) {
    Thing::query()->delete();

    Excel::import(new ThingsImport, $request->file('sheet'));

    return redirect('/');
});

Route::delete('/things', function (Request $request) {
    Thing::query()->delete();

    return redirect('/');
});