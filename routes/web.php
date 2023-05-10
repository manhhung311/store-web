<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("",  [HomeController::class, 'index'])->name("nmn.logindone");
// Route::get("/home",  [HomeController::class, 'create']);
Route::get("/login",  "App\Http\Controllers\LoginController@index")->name("login");
Route::post("/login",  "App\Http\Controllers\LoginController@store")->name("formLogin");
Route::get("/",  "App\Http\Controllers\LoginController@index");
Route::get("/home",  "App\Http\Controllers\HomeController@index")->name("home");
Route::get("/logout",  "App\Http\Controllers\LoginController@destroy")->name("logout");

Route::group([
    'prefix' => '/admin', 'middleware' => 'admin'
], function () {

    Route::get('', 'App\Http\Controllers\AdminController@index')->name('admin');
    /**
     * quản lý tài khoản
     */
    Route::group([
        'prefix' => '/user'
    ], function () {
        Route::get('', 'App\Http\Controllers\UserController@index')->name('users');
        Route::get("/register",  "App\Http\Controllers\UserController@create")->name("register");
        Route::get("/edit/{id}",  "App\Http\Controllers\UserController@show")->name("editUser");
        Route::post("/edit/{id}",  "App\Http\Controllers\UserController@update")->name("updateUser");
        Route::get("/delete/{id}",  "App\Http\Controllers\UserController@destroy")->name("deleteUser");
        Route::post('/register', 'App\Http\Controllers\UserController@store')->name('register');
    });

    /**
     * Quản lý công ty cung ứng
     */

    Route::group([
        'prefix' => '/company'
    ], function () {
        Route::get('', 'App\Http\Controllers\CompanyController@index')->name('companys');
        Route::get("/create",  "App\Http\Controllers\CompanyController@create")->name("createCompany");
        Route::get("/edit/{id}",  "App\Http\Controllers\CompanyController@edit")->name("editCompany");
        Route::post("/edit/{id}",  "App\Http\Controllers\CompanyController@update")->name("updateCompany");
        Route::get("/delete/{id}",  "App\Http\Controllers\CompanyController@destroy")->name("deleteCompany");
        Route::post('/create', 'App\Http\Controllers\CompanyController@store')->name('formCompany');
    });


    /**
     * Quản lý nhãn Hàng
     */
    Route::group([
        'prefix' => '/category'
    ], function () {
        Route::get('', 'App\Http\Controllers\CategoryController@index')->name('categorys');
        Route::get("/create",  "App\Http\Controllers\CategoryController@create")->name("createCategory");
        Route::get("/edit/{id}",  "App\Http\Controllers\CategoryController@edit")->name("editCategory");
        Route::post("/edit/{id}",  "App\Http\Controllers\CategoryController@update")->name("updateCategory");
        Route::get("/delete/{id}",  "App\Http\Controllers\CategoryController@destroy")->name("deleteCategory");
        Route::post('/create', 'App\Http\Controllers\CategoryController@store')->name('formCategory');
    });

    /**
     * Quản Lý Hóa Đơn Nhập
     */

    Route::group([
        'prefix' => '/importbill'
    ], function () {
        Route::get('', 'App\Http\Controllers\ImportBillController@index')->name('importBills');
        Route::get("/create",  "App\Http\Controllers\ImportBillController@create")->name("createImportBill");
        Route::get("/edit/{id}",  "App\Http\Controllers\ImportBillController@edit")->name("editImportBill");
        Route::post("/edit/{id}",  "App\Http\Controllers\ImportBillController@update")->name("updateImportBill");
        Route::get("/delete/{id}",  "App\Http\Controllers\ImportBillController@destroy")->name("deleteImportBill");
        Route::post('/create', 'App\Http\Controllers\ImportBillController@store')->name('formImportBill');
    });

    /**
     * Quản Lý Hóa Đơn Xuất
     */

    Route::group([
        'prefix' => '/exportbill'
    ], function () {
        Route::get('', 'App\Http\Controllers\ExportBillController@index')->name('exportBills');
        Route::get("/create",  "App\Http\Controllers\ExportBillController@create")->name("createExportBill");
        Route::get("/edit/{id}",  "App\Http\Controllers\ExportBillController@edit")->name("editExportBill");
        Route::post("/edit/{id}",  "App\Http\Controllers\ExportBillController@update")->name("updateExportBill");
        Route::get("/delete/{id}",  "App\Http\Controllers\ExportBillController@destroy")->name("deleteExportBill");
        Route::post('/create', 'App\Http\Controllers\ExportBillController@store')->name('formExportBill');
    });


    /**
     * Quản Lý Sản Phẩm
     */
    Route::group([
        'prefix' => '/product'
    ], function () {
        Route::get('', 'App\Http\Controllers\ProductController@index')->name('products');
        Route::get("/create",  "App\Http\Controllers\ProductController@create")->name("createProduct");
        Route::get("/edit/{id}",  "App\Http\Controllers\ProductController@edit")->name("editProduct");
        Route::post("/edit/{id}",  "App\Http\Controllers\ProductController@update")->name("updateProduct");
        Route::get("/delete/{id}",  "App\Http\Controllers\ProductController@destroy")->name("deleteProduct");
        Route::post('/create', 'App\Http\Controllers\ProductController@store')->name('formProduct');
    });
});
