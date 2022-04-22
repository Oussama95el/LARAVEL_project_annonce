<?php
use App\Http\Controllers\OfferController;
use App\Http\Controllers\DemandController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TesterController;
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
//public routes



//user
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/test', [AuthController::class, 'test']);
//offer
Route::get('/offer/{id}',[OfferController::class, 'show']);
Route::get('/offer',[OfferController::class, 'showAll']);
Route::get('/offer/search/{type}',[OfferController::class, 'search']);
//demand
Route::get('/demand/{id}',[DemandController::class, 'show']);
Route::get('/demand',[DemandController::class, 'showAll']);
Route::get('/demand/search/{type}',[DemandController::class, 'search']);

// protected routes
Route::group(['middleware' => 'auth:sanctum' ],function () {
    //offers
    Route::post('/logout', [AuthController::class,'logout']);
    Route::put('/offer/{id}',[OfferController::class, 'update']);
    Route::post('/offer',[OfferController::class, 'store']);
    Route::delete('/offer/{id}',[OfferController::class, 'destroy']);
    //demands
    Route::put('/demand/{id}',[DemandController::class, 'update']);
    Route::post('/demand',[DemandController::class, 'store']);
    Route::delete('/demand/{id}',[DemandController::class, 'destroy']);
});

//Route::middleware(('auth:api'))->get('/user', function (Demand $request){
//   return $request->user();
//});
