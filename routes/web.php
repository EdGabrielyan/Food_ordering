<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [FoodController::class, 'index']);
Auth::routes();

Route::get('logout', [LoginController::class, 'logout']);

// food routes with policy
Route::get('/updatefood/{food}', [FoodController::class, 'getForUpdate'])->middleware('protected');
Route::get('/home', [FoodController::class, 'index']);
Route::get('/home/{type}', [FoodController::class, 'filter']);
Route::get('/food/viewfood', [FoodController::class, 'adminIndex'])->middleware('protected');
Route::view('/food/addfood', 'food.addfood')->middleware('protected');
Route::post('/food/create', [FoodController::class, 'create']);
Route::get('/food/{food}', [FoodController::class, 'show']);
Route::post('/food/{food}', [FoodController::class, 'update']);
Route::delete('/food/{food}', [FoodController::class, 'destroy']);
Route::post('/food/addfood', [FoodController::class, 'create']);


// Order routes
Route::get('order', [OrderController::class, 'show']);
Route::delete('/order/{order_id}', [OrderController::class, 'destroy']);

// Cart routes
Route::view('cart', 'cart');
Route::post('/addToCart', [OrderController::class, 'updateCart']);
Route::delete('/cart/remove/{food_id}', [OrderController::class, 'removeFromCart']);
Route::post('/cart/placeorder', [OrderController::class, 'placeOrder']);

Route::post('/user/edit', [UserController::class, 'update']);
Route::get('/user/edit', [UserController::class, 'updateView']);
Route::delete('/user/{user}', [UserController::class, 'delete']);




Route::get('/widget.js', function (\Illuminate\Http\Request $request) {
    $key = $request->query('key');
    $js = <<<JAVASCRIPT
const key = "{$key}";

(async function () {
    if (!key) return;

    const response = await fetch("https://foodordering-production-d990.up.railway.app/api/widget?key=" + key);
    const data = await response.json();

    if (data.error) return;

    setTimeout(() => {
        const modal = document.createElement('div');
        modal.innerHTML = `
<div style="position: fixed; top: 20%; left: 30%; background: white; padding: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.3); z-index: 9999;">
    <h3>\${data.title}</h3>
    <p>\${data.message}</p>
    <button onclick="this.parentElement.remove()">Закрыть</button>
</div>`;
        document.body.appendChild(modal);
    },  3000);
})();
JAVASCRIPT;
    return response($js, 200)
        ->header('Content-Type', 'application/javascript')
        ->header('Access-Control-Allow-Origin', '*')  // Разрешаем доступ с любого домена
        ->header('Cross-Origin-Resource-Policy', 'cross-origin'); // Разрешаем кросс-доменные ресурсы
});

