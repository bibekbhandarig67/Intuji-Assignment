<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("/blogpost", BlogPostController::class);