<?php
use App\Http\Controllers\SirtController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;



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

//-- Route Activity --//

//-- Route Activity --//


//-- Route User view --//

Route::get('/index', function () {
    return view('User.v_user-index');
});

Route::get('/create', function () {
    return view('User.v_create');
});

Route::get('/aktivitas', function () {
   return view('User.v_aktivitas');
});

Route::get('/dashboard', function () {
    return view('User.v_dashboard');
});

Route::get('/list', function () {
    return view('User.v_list');
});


//-- Route User view --//



// route view parsing data ------------------------------------------------------------------------------------------------------------------------------

Route::get('/list', [App\Http\Controllers\SirtController::class, 'create']);  // menampilkan data list
Route::get('/kotak-masuk', [App\Http\Controllers\SirtController::class, 'index2']); // menampilkan data kotak masuk
Route::post('/insertdata', [App\Http\Controllers\SirtController::class, 'insertdata']); //menginput data ke database 
Route::get('/tampilkandata/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata']); //menampilkan data pada formulir update (user)
Route::post('/updatedata/{id}', [App\Http\Controllers\SirtController::class, 'updatedata']); // submit data update 
//Route::post('/proses1/{id}', [App\Http\Controllers\SirtController::class, 'updatedata']); // submit data proses1
Route::get('/tampilkandata2/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata2']); // //menampilkan data pada formulir update (pj)
Route::get('/pj-aktifitas', [App\Http\Controllers\SirtController::class, 'pjaktifitas']); // menampilkan data aktifitas (pj)
Route::get('/tampilkandata3/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata3']); // menampilkan data proses1 untuk di proses
Route::get('/tampilkandata4/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata4']); // menampilkan data proses2 untuk di proses
Route::get('/tampilkandata5/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata5']); // menampilkan data proses3 untuk di proses
Route::post('/createDataaktifitas', [App\Http\Controllers\SirtController::class, 'insertDataakifitas']); //menginput data ke database
Route::get('/delete/{id}', [App\Http\Controllers\SirtController::class, 'delete']); // query delete
Route::get('/index', [App\Http\Controllers\SirtController::class, 'dataTerkini']); // menampilkan data terkini (user)
//Route::get('/aktivitas', [App\Http\Controllers\SirtController::class, 'proses1']); //menampilkan data pada formulir update (user)




//route view parsing data -------------------------------------------------------------------------------------------------------------------------------



//-- Route Penanggung Jawab view --//

Route::get('/pj-index', function () {
    return view('Penanggung-Jawab.v_pj-index');
});



//-- Route Penanggung Jawab view --//

