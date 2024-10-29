<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/welcome', function () {
    return view('welcome');
});



Route::resource('bookings', BookingController::class);

//Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
//Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
//Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
//Route::get('/bookings/{id}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
//Route::put('/bookings/{id}', [BookingController::class, 'update'])->name('bookings.update');
//Route::delete('/bookings/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');
//





//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [LoginController::class, 'login']);
//Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('/register', [RegisterController::class, 'register']);



