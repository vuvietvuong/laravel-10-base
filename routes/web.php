<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthController::class, 'create'])->name('login-view');
Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
Route::post('/login', [AuthController::class, 'store'])->name('login');
Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('password.request');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/basic-input', [AdminController::class, 'basicInput'])->name('basicInput');
    Route::get('/form-input', [AdminController::class, 'formInput'])->name('formInput');
    Route::get('/vertical-form', [AdminController::class, 'verticalForm'])->name('verticalForm');
    Route::get('/horizontal-form', [AdminController::class, 'horizontalForm'])->name('horizontalForm');
    Route::get('/table', [AdminController::class, 'table'])->name('table');
    Route::get('/scroll', [AdminController::class, 'scroll'])->name('scroll');
    Route::get('/findNotFound', [AdminController::class, 'findNotFound'])->name('findNotFound');
    Route::get('/maintaince', [AdminController::class, 'maintaince'])->name('maintaince');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/notification', [AdminController::class, 'notification'])->name('notification');
    Route::get('/connect', [AdminController::class, 'connect'])->name('connect');

    Route::get('/list-group', [AdminController::class, 'listGroup'])->name('list-group');
    Route::get('/modal', [AdminController::class, 'modal'])->name('modal');
    Route::get('/dropdown', [AdminController::class, 'dropdown'])->name('dropdown');
    Route::get('/carouse', [AdminController::class, 'carouse'])->name('carouse');
    Route::get('/collapse', [AdminController::class, 'collapse'])->name('collapse');
    Route::get('/button', [AdminController::class, 'button'])->name('button');
    Route::get('/badge', [AdminController::class, 'badge'])->name('badge');
    Route::get('/alert', [AdminController::class, 'alert'])->name('alert');
    Route::get('/accordion', [AdminController::class, 'accordion'])->name('accordion');
    Route::get('/card', [AdminController::class, 'card'])->name('card');

    Route::get('/pagination', [AdminController::class, 'pagination'])->name('pagination');
    Route::get('/progress', [AdminController::class, 'progress'])->name('progress');
    Route::get('/spinner', [AdminController::class, 'spinner'])->name('spinner');
    Route::get('/toast', [AdminController::class, 'toast'])->name('toast');
    Route::get('/tooltip', [AdminController::class, 'tooltip'])->name('tooltip');
    Route::get('/typography', [AdminController::class, 'typography'])->name('typography');
    Route::get('/offcanvas', [AdminController::class, 'offcanvas'])->name('offcanvas');
    Route::get('/tabpill', [AdminController::class, 'tabpill'])->name('tabpill');
    
    // Route::get('verify-email', EmailVerificationPromptController::class)
    //             ->name('verification.notice');

    // Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    //             ->middleware(['signed', 'throttle:6,1'])
    //             ->name('verification.verify');

    // Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //             ->middleware('throttle:6,1')
    //             ->name('verification.send');

    // Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    //             ->name('password.confirm');

    // Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    // Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthController::class, 'destroy'])
                ->name('logout');
});