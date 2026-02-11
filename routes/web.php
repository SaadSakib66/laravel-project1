<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

Route::get('/project', [ProjectController::class, 'project'])->name('project');

Route::get('/resume', [ResumeController::class, 'resume'])->name('resume');

