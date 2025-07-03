<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FreelancingController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',action: [FreelancingController::class,'showmain']);
Route::get('/livecatagories',action: [FreelancingController::class,'livecatagories']);
Route::get('/videocatagories',action: [FreelancingController::class,'videocatagories']);
Route::get('/bronze',action: [FreelancingController::class,'bronze']);
Route::get('/bronze_details',action: [FreelancingController::class,'bronze_details']);
Route::get('/silver',action: [FreelancingController::class,'silver']);
Route::get('/silver_details',action: [FreelancingController::class,'silver_details']);
Route::get('/gold',action: [FreelancingController::class,'gold']);
Route::get('/gold_details',action: [FreelancingController::class,'gold_details']);
Route::get('/diamond',action: [FreelancingController::class,'diamond']);
Route::get('/diamond_details',action: [FreelancingController::class,'diamond_details']);
Route::get('/form',action: [FreelancingController::class,'form']);






