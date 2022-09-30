<?php
use App\Http\Controllers\SirtController;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('Login.v_login');
})->name('login');

Route::get('/registrasi', function () {
    return view('Login.v_registrasi');
});



//-- Route User view --//



Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'postlogin']); // mengirim data email & password login
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);  // logout
Route::get('/registrasi', [App\Http\Controllers\LoginController::class, 'registrasi']);  // Registrasi
Route::post('/simpan-registrasi', [App\Http\Controllers\LoginController::class, 'simpanregistrasi']); //menyimpan data resgistrasi

// route view parsing data ------------------------------------------------------------------------------------------------------------------------------
Route::group(['middleware' => ['auth']], function()
{
Route::get('/index', [App\Http\Controllers\SirtController::class, 'dataTerkini']);
Route::get('/dataAktivitas/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandataAktivitas']);
Route::get('/list', [App\Http\Controllers\SirtController::class, 'create']);  // menampilkan data list
Route::get('/list-aktivitas', [App\Http\Controllers\SirtController::class, 'userAktivitas']); // menampilkan data aktifitas
Route::get('/kotak-masuk', [App\Http\Controllers\SirtController::class, 'index2']); // menampilkan data kotak masuk
Route::post('/insertdata', [App\Http\Controllers\SirtController::class, 'insertdata']); //menginput data ke database 
Route::get('/tampilkandata/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata']); //menampilkan data pada formulir update (user)
Route::post('/updatedata/{id}', [App\Http\Controllers\SirtController::class, 'updatedata']); // submit data update && submit data update proses1
Route::post('/updatedata2/{id}', [App\Http\Controllers\SirtController::class, 'updatedata2']); // submit data update Proses2
Route::post('/updatedata3/{id}', [App\Http\Controllers\SirtController::class, 'updatedata3']); // submit data update Proses3
Route::get('/tampilkandata2/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata2']); // //menampilkan data pada formulir update (pj)
Route::get('/pj-aktifitas', [App\Http\Controllers\SirtController::class, 'pjaktifitas']); // menampilkan data aktifitas (pj)
Route::get('/test/{id}', [App\Http\Controllers\SirtController::class, 'test']);
Route::get('/tampilkandata3/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata3']); // menampilkan data proses1 untuk di proses
Route::get('/tampilkandata4/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata4']); // menampilkan data proses2 untuk di proses
Route::get('/tampilkandata5/{id}', [App\Http\Controllers\SirtController::class, 'tampilkandata5']); // menampilkan data proses3 untuk di proses
Route::post('/createDataaktifitas', [App\Http\Controllers\SirtController::class, 'insertDataakifitas']); //menginput data ke database
Route::get('/delete/{id}', [App\Http\Controllers\SirtController::class, 'delete']); // query delete



Route::get('/create', function () {
    return view('User.v_create');
});

Route::get('/aktivitas', function () {
   return view('User.v_aktivitas');
});

Route::get('/dashboard', function () {
    return view('User.v_dashboard');
});


Route::get('/aktivitas', function () {
    return view('User.v_aktivitas');
});

Route::get('/pj-index', function () {
    return view('Penanggung-Jawab.v_pj-index');
});

}
);

//route view parsing data -------------------------------------------------------------------------------------------------------------------------------



//-- Route Penanggung Jawab view --//


//-- Route Penanggung Jawab view --//



