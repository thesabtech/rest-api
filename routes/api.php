<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryLawController;
use App\Http\Controllers\CategoryDetailController;
use App\Http\Controllers\DepartmentLawController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\AuthController;

Route::post('/auth/login', [AuthController::class, 'login']);

Route::get('/categories', [CategoryLawController::class, 'index']);
Route::post('/categories', [CategoryLawController::class, 'store']);
Route::get('/categories/{id}', [CategoryLawController::class, 'show']);
Route::post('/categories/{id}/update', [CategoryLawController::class, 'update']);
Route::post('/categories/{id}/delete', [CategoryLawController::class, 'destroy']);

Route::get('/categorydetails', [CategoryDetailController::class, 'index']);
Route::post('/categorydetails', [CategoryDetailController::class, 'store']);
Route::get('/categorydetails/{id}', [CategoryDetailController::class, 'show']);
Route::post('/categorydetails/{id}/update', [CategoryDetailController::class, 'update']);
Route::post('/categorydetails/{id}/delete', [CategoryDetailController::class, 'destroy']);

Route::get('/departments', [DepartmentLawController::class, 'index']);
Route::post('/departments', [DepartmentLawController::class, 'store']);
Route::get('/departments/{catid}', [DepartmentLawController::class, 'show']);
Route::put('/departments/{catid}', [DepartmentLawController::class, 'update']);
Route::delete('/departments/{catid}', [DepartmentLawController::class, 'destroy']);

Route::get('/laws', [HelpController::class, 'index']);
Route::post('/laws', [HelpController::class, 'store']);
Route::get('/laws/{ACTID_help}', [HelpController::class, 'show']);
Route::put('/laws/{ACTID_help}', [HelpController::class, 'update']);
Route::delete('/laws/{ACTID_help}', [HelpController::class, 'destroy']);