<?php
use App\Http\Controllers\DossierMedicalController;
use App\Models\DossierMedical;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', function () {
    return view('home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patient', [App\Http\Controllers\ActeurController::class, 'user'])->name('patient');
Route::get('/medecin', [App\Http\Controllers\ActeurController::class, 'admin'])->name('medecin');
Route::get('dossier/{id}', [App\Http\Controllers\DossierMedicalController::class, 'show'])->name('dossiers.show');
Route::post('dossier/edit/{id}', [App\Http\Controllers\DossierMedicalController::class, 'edit'])->name('dossiers.edit');
Route::patch('dossier/update/{id}', [App\Http\Controllers\DossierMedicalController::class, 'edit'])->name('dossiers.edit');
Route::delete('dossier/delete/{id}', [App\Http\Controllers\DossierMedicalController::class, 'destroy'])->name('dossiers.destroy');


Route::group(['middleware' => ['auth']], function (){
    Route::get('/patient', [App\Http\Controllers\ActeurController::class, 'user'])->name('patient');
    Route::group(['middleware' => ['admin']], function (){
        Route::get('/medecin', [App\Http\Controllers\ActeurController::class, 'admin'])->name('medecin');
    });
});
/* Route::resource('dossiers', DossierMedicalController::class);
 */#app::resource('dossiers', DossierMedicalController::class);
