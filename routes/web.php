<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\ContentController::class, 'index'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/authentication', [App\Http\Controllers\Auth\LoginController::class, 'authencticateWithMembership'])->name('authencticateWithMembership');
Route::post('/authentication', [App\Http\Controllers\Auth\LoginController::class, 'authencticateWithMembershipStore'])->name('authencticateWithMembershipStore');
Route::get('/article/{article:id}', [App\Http\Controllers\ContentController::class, 'detailArticle'])->name('detailArticle');

// goggle auth
Route::get('/auth/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// facebook auth
Route::get('/auth/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('/auth/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);
