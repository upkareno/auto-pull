<?php
use Illuminate\Support\Facades\Route;
use Upkareno\AutoPull\Controllers\AutoPullController;

Route::post( '/auto-pull', [ AutoPullController::class, 'auto_pull' ] );