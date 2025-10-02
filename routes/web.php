<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\EpaperController;


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
    return redirect('/login');
});


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

//Route::get('/all-news-prev', [NewsController::class, 'index']);
Route::get('/create-news', [NewsController::class, 'create_news']);
Route::post('/create-news', [NewsController::class, 'store']);
Route::get('/edit-news/{id}', [NewsController::class, 'edit_news']);
Route::post('/update-news', [NewsController::class, 'update_news']);
Route::get('/delete-news/{id}', [NewsController::class, 'delete_news']);

Route::get('all-news', [NewsController::class, 'get_server_side_news']);
Route::get('news/pagination', [NewsController::class, 'get_news_pagination']);


Route::get('/all-categories', [CategoryController::class, 'index']);
Route::get('/create-category', [CategoryController::class, 'create_category']);
Route::post('/create-category', [CategoryController::class, 'store']);
Route::get('/edit-category/{id}', [CategoryController::class, 'edit_category']);
Route::post('/update-category', [CategoryController::class, 'update_category']);
Route::get('/delete-category/{id}', [CategoryController::class, 'delete_category']);


Route::get('/all-users', [UserController::class, 'index']);
Route::get('/create-user', [UserController::class, 'create_user']);
Route::post('/create-user', [UserController::class, 'store']);
Route::get('/edit-user/{id}', [UserController::class, 'edit_user']);
Route::post('/update-user', [UserController::class, 'update_user']);
Route::get('/delete-user/{id}', [UserController::class, 'delete_user']);


Route::get('/email', [MarketingController::class, 'email_index']);
Route::get('/create-email', [MarketingController::class, 'create_email']);
Route::post('/send-email', [MarketingController::class, 'send_email']);


Route::get('/all-advertisements', [AdvertisementController::class, 'index']);
Route::get('/create-advertisement', [AdvertisementController::class, 'create_advertisement']);
Route::post('/create-advertisement', [AdvertisementController::class, 'store_advertisement']);
Route::get('/edit-advertisement/{id}', [AdvertisementController::class, 'edit_advertisement']);
Route::post('/update-advertisement', [AdvertisementController::class, 'update_advertisement']);
Route::get('/due-payment/{id}', [AdvertisementController::class, 'due_payment']);
Route::post('/due-payment', [AdvertisementController::class, 'update_due_payment']);
Route::get('/payment-history/{id}', [AdvertisementController::class, 'get_payment_history']);
Route::get('/delete-advertisement/{id}', [AdvertisementController::class, 'delete_advertisement']);

Route::get('/advertisement-categories', [AdvertisementController::class, 'all_ad_categories']);
Route::get('/create-advertisement-category', [AdvertisementController::class, 'create_ad_category']);
Route::post('/create-advertisement-category', [AdvertisementController::class, 'store_ad_category']);
Route::get('/edit-ad-category/{id}', [AdvertisementController::class, 'edit_ad_category']);
Route::post('/update-ad-category', [AdvertisementController::class, 'update_ad_category']);
Route::get('/delete-ad-category/{id}', [AdvertisementController::class, 'delete_ad_category']);

Route::get('/invoice/{id}', [AdvertisementController::class, 'get_invoice']);
Route::get('/report', [AdvertisementController::class, 'get_report']);
Route::get('/advertisement-report', [AdvertisementController::class, 'get_advertisement_report']);


Route::get('/all-archives', [ArchiveController::class, 'index']);
Route::get('/create-archive', [ArchiveController::class, 'create_archive']);
Route::post('/create-archive', [ArchiveController::class, 'store']);
Route::get('/delete-archive-edition/{id}', [ArchiveController::class, 'delete_archive_edition']);


//For Epaper
Route::get('/all-epapers', [EpaperController::class, 'index']);
Route::get('/date-epapers/{date}', [EpaperController::class, 'date_wise_epapers']);
Route::get('/create-epaper', [EpaperController::class, 'create_epaper']);
Route::get('/create-date-epaper/{date}', [EpaperController::class, 'create_date_epaper']);
Route::post('/create-epaper', [EpaperController::class, 'store']);
Route::get('/view-epaper/{id}', [EpaperController::class, 'view']);
Route::get('/crop-epaper/{id}', [EpaperController::class, 'crop']);
Route::get('/view-crop-epaper/{id}', [EpaperController::class, 'view_crop_image']);
Route::get('/edit-epaper/{id}', [EpaperController::class, 'edit_epaper_page']);
Route::post('/update-epaper', [EpaperController::class, 'update_epaper_page']);
Route::get('/delete-epaper/{date}', [EpaperController::class, 'delete_epaper']);


/*----------Ajax Route---------------*/
Route::post('/get-advertisement-pricing', [AdvertisementController::class, 'get_advertisement_pricing']);
Route::post('/generate-advertisement-report', [AdvertisementController::class, 'generate_report']);
Route::post('/store-cropped-epaper', [EpaperController::class, 'store_cropped_epaper']);