<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChalenggeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ScoreboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardChalenggeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/scoreboard', [ScoreboardController::class, 'index'])->name('scoreboard.index');
    Route::get('/scores', [ScoreboardController::class, 'fetchScores']);

    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::middleware('myAuth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['admin'])->name('dashboard.index');

        Route::get('/chalengge', [ChalenggeController::class, 'index'])->name('chalengge.index');
        Route::get('chalengge/{chalengge:slug}', [ChalenggeController::class, 'show'])->name('chalengge.show');
        Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::post('chalengge/{chalengge:slug}', [ChalenggeController::class, 'checkAnswer']);
        Route::resource('dashboard/chalengge', DashboardChalenggeController::class)->middleware(['admin']);;
        Route::resource('dashboard/category', DashboardCategoryController::class)->middleware('superAdmin');
        Route::resource('dashboard/user', DashboardUserController::class)->middleware('superAdmin');
    });

    require __DIR__ .'/auth.php';
});