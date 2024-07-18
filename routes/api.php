<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OtpController;
Route::post("otp/generate", [OtpController::class, "generate"]);
Route::post("otp/verify", [OtpController::class, "verify"]);
Route::post("user/login", [AuthController::class, " index"]);
