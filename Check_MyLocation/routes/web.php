<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RestaurantController;


//This route used to get user's permission to access his location
Route::get('/',[LocationController::class,'index'])->name('home');

//This route used to get nearby restaurant to user's location within 2km.
Route::get('/nearest-restaurant',[RestaurantController::class,'getNearestRestaurant'])->name('get.nearest.restaurant');
