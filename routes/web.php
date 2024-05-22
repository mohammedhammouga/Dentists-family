<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcceptUsersController; 
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RendezVousController;




 

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

/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::view('/', 'welcome')->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');
require __DIR__.'/adminauth.php';



/*accept-usersroute */
Route::get('/accept-users', [AcceptUsersController::class, 'index'])->name('accept-users.index');
Route::delete('/accept-users/{id}', [AcceptUsersController::class, 'destroy'])->name('accept-users.destroy');
Route::post('/accept-users', [AcceptUsersController::class, 'store'])->name('accept-users.store');
Route::get('modifier-users/{id}/edit', [AcceptUsersController::class, 'edit'])->name('edit-user.edit');
Route::put('/accept-users/{id}', [AcceptUsersController::class, 'update'])->name('accept-users.update');
/* contact route */
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::get('/message', [ContactController::class, 'index'])->name('message.index');
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
/* search route */
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
/* map route */
Route::get('/map/show', [MapController::class, 'show'])->name('map.show');
Route::get('/map', [MapController::class, 'index'])->name('map.index');



/* home route */
Route::get('/',function(){ return view('home'); })->name('home.index');
Route::get('/home',function(){
    return view('welcome');
});
/* events roues */
Route::get('/events', [EventController::class, 'index'])->name('admin.events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('admin.events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy'); 

Route::get('/dashadmin',function(){
    return view('admin.dashadmin');
})->name('dashadmin');
Route::get('/notifications',function(){
    return view('admin.notifications');
})->name('notifications'); 

Route::get('/admin/register',function(){
    return view('admin.auth.register');
})->name('admin.auth.register');









Route::get('/rendezvous', [RendezVousController::class, 'index'])->name('rendezvous');
Route::post('/rendezvous', [RendezVousController::class, 'store'])->name('rendezvous.store');









