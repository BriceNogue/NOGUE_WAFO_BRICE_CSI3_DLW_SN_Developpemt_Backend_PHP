<?php

use App\Http\Controllers\REST\BulletinController;
use App\Http\Controllers\REST\ElectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\REST\ParticipantController;
use App\Http\Controllers\REST\PaysController;
use App\Http\Controllers\REST\RegionController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::apiResource("abonne", AbonneController::class);


