<?php

use App\Http\Controllers\ProductCategoryServiceController;
use App\Http\Controllers\BrandServiceController;
use App\Http\Controllers\ProductServiceController;
use App\Http\Controllers\PriceListServiceController;
use App\Http\Controllers\TermOfPaymentServiceController;
use App\Http\Controllers\ContactServiceController;
use App\Http\Controllers\SalesServiceController;
use App\Http\Controllers\FounderServiceController;
use App\Http\Controllers\UnitServiceController;
use App\Http\Controllers\RoleServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactBankController;
use App\Http\Controllers\KabkotController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProvinsiController;
use Illuminate\Support\Facades\Route;

// Rute autentikasi
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/password/email', [AuthController::class, 'forgotPassword']);
Route::post('/password/reset', [AuthController::class, 'resetPassword']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/contactsdatatable', [ContactServiceController::class, 'datatable']);

Route::resource('provinsi', ProvinsiController::class);
Route::resource('kabkot', KabkotController::class);
Route::resource('kecamatan', KecamatanController::class);
Route::resource('kelurahan', KelurahanController::class);



// Rute yang memerlukan otentikasi JWT dan log activity
Route::group(['middleware' => ['jwt.auth', 'log.activity']], function () {
    // Rute untuk mendapatkan informasi pengguna yang sudah login
    Route::middleware('auth:api')->get('/user', function (\Illuminate\Http\Request $request) {
        return $request->user();
    });

    // Rute contoh
    Route::get('/test', function () {
        return 'Rute ini berfungsi';
    });


    // Route::post('/contact', [ContactServiceController::class, 'store']);
    // Rute sumber daya yang memerlukan otentikasi JWT dan log activity
    Route::resource('contacts', ContactServiceController::class);
    Route::resource('contact-banks', ContactBankController::class);
    Route::get('/getbank/{contactId}', [ContactBankController::class, 'indexByContactId']);
    Route::resource('sales', SalesServiceController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('founders', FounderServiceController::class);
    Route::resource('units', UnitServiceController::class);
    Route::resource('product-categories', ProductCategoryServiceController::class);
    Route::resource('brands', BrandServiceController::class);
    Route::resource('products', ProductServiceController::class);
    Route::resource('price-lists', PriceListServiceController::class);
    Route::resource('terms-of-payment', TermOfPaymentServiceController::class);
    Route::resource('roles', RoleServiceController::class);
});
