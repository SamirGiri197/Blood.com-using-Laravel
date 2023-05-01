<?php

use Illuminate\Http\Request;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BloodbankController;
use App\Http\Controllers\backbloodbankController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BloodrequestController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BackhospitalController;
use App\Http\Controllers\BlooddonateController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BloodInventoryController;
use App\Http\Controllers\AdminController;




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
    return view('frontend.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/search', [HospitalController::class, 'search'])->name('hospital.search');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('comments',CommentController::class);
    
    Route::resource('home',HomeController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    
});
Route::resource('about',AboutController::class);

Route::get('request/mail',[BloodrequestController::class,'sendMail'])->name('mail.form');
Route::post('request/process-mail',[BloodrequestController::class,'proceedSendMail'])->name('mail.send');
Route::resource('request',BloodrequestController::class);


require __DIR__.'/adminauth.php';

Auth::routes();

Route::resource('hospital',HospitalController::class);
Route::resource('backhospital',BackhospitalController::class);
Route::resource('bloodbank',BloodbankController::class);
Route::resource('backbloodbank',backbloodbankController::class);
Route::resource('donate',BlooddonateController::class);
Route::resource('blogs',BlogController::class);
Route::resource('admin',AdminController::class);
Route::resource('event',EventController::class);


Route::resource('bloodInventory',BloodInventoryController::class);









// Route::get('/list', [HospitalController::class, 'list'])->name('hospital.list');
Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);
Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);

