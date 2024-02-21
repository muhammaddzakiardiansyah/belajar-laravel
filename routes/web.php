<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\VacancyController;
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

Route::controller(VacancyController::class)->group(function () {
    Route::get('/job-vacancy', 'index')->name('job vacancy');
});

Route::get('/', function () {
    return view('HomePage', ["page" => 'Home']);
})->name('home');
Route::get('/about', function() {
    return view('AboutPage', ["page" => "About"]);
})->middleware('auth');
// Route::get('/job-vacancy', function() {
//     return view('JobVacancy', ["page" => "Job Vacancy"]);
// });
Route::get('/job-vacancy/{id}', function($id) {
    return view('DetailJobVacancy', [
        "page" => "Detail Job Vacancy",
        "id" => $id,
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login page');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::prefix('admin')->group(function() {
//     Route::get('/about/{id}', function($id) {
//         return view('mainPage.index', [
//             "name" => "M Dzaki ardiansyah",
//             "age" => 19,
//             "id" => $id,
//             "data" => ['pisang', 'jambu', 'jeruk', 'kiwi']
//         ]);
//     });
// });

