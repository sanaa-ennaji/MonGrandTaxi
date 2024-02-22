<?php


use App\Models\trajet;
use App\Models\comment;
use App\Models\reservation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\trajetController;
use App\Http\Controllers\commentController;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/ERROR404', function () {
    return view('404');
});
Route::get('/driver', function () {
    return view('driver');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/register', function () {
    return view('register');
});



Route::get('/trajet', function () {
      $trajets = trajet::all();
    return view('trajet' ,['trajets'=>$trajets]);

});





Route::get('/reservation', function () {
    $reservations = reservation::all();
  return view('reservation' ,['reservation'=>$reservations]);
});



Route::post('/registerD', [UserController::class, 'registerDriver']);
Route::post('/registerP', [UserController::class, 'registerPassanger']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/createTrajet' ,[trajetController::class , 'createTrajet']);
Route::get('/driver',[trajetController::class , 'show'] );
Route::get('/search',[trajetController::class , 'search']);
Route::get('/reservation/{trajetId}', [ReservationController::class, 'showForm'])->name('reservation.form');
Route::post('/createReservation', [ReservationController::class, 'createReservation'])->name('create.reservation');
Route::delete('/delete/{trajet}',[ trajetController::class , 'delete']);
Route::delete('/update/{trajet}',[ trajetController::class , 'update']);
Route::patch('/update/reservation/{id}', [ReservationController::class, 'updateStatus']);
Route::Post('/createcomments' , [commentController::class , 'createComment']);
Route::Post('/trajet' , [commentController::class , 'display']);


Route::get('/reservation', function(){
    $reservations = [];
    if(auth()->check()) {
        $user = auth()->user();
        $reservations = Reservation::whereHas('trajetreserve', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })->latest()->get();
    }
    return view('reservation', ['reservations' => $reservations]);
});


Route::get('/reserved', function(){
    $reservations = [];
    if(auth()->check()) {
        $reservations = auth()->user()->userReservation()->latest()->get();
    }
    return view('reserved',['reservations'=>$reservations]);
});


