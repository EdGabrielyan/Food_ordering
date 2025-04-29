<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/widget', function (Request $request) {
    $key = $request->query('key');

    // Здесь можно проверить ключ в БД. Сейчас — демо.
    if ($key !== '8d949388-3fda-4304-b7a3-02f7f4f80df1') {
        return response()->json(['error' => 'Invalid API key'], 403);
    }

    return response()->json([
        'title' => 'Привет!',
        'message' => 'Это ваш виджет!',
        'delay' => 3000,
    ])->header('Access-Control-Allow-Origin', '*');
});