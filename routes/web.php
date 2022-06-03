<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/


use App\Http\Controllers\HomeController as HomeHTPHomeController;
use App\Http\Controllers\PageController as HomeHTPAboutController;
use App\Http\Controllers\ContactController as HomeHTPContactController;
use App\Http\Controllers\ProductController as HomeHTPProductController;
use App\Http\Controllers\BlogController as HomeHTPBlogController;

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;

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

//Route::get('/', function () {return view('maintain');})->name('homeWeb');
/*Home page*/
Route::group(['middleware' => [\App\Http\Middleware\HomeHTPMiddleware::class], 'as' => 'HomeHTP.'], function () {
    Route::get('/', [HomeHTPHomeController::class, 'index'])->name('homeWebPay');

    //Page
    Route::get('/about', [HomeHTPAboutController::class, 'about'])->name('aboutWebPay');
    Route::get('/about/supply', [HomeHTPAboutController::class, 'supply'])->name('supplyWebPay');
    Route::get('/about/license', [HomeHTPAboutController::class, 'license'])->name('licenseWebPay');

    //Contact
    Route::get('/contact', [HomeHTPContactController::class, 'index'])->name('contactWebPay');
    Route::post('/contact-form', [HomeHTPContactController::class, 'storeContactForm'])->name('contact-form.store');

    Route::get('/contact/question', [HomeHTPContactController::class, 'question'])->name('questionWebPay');
    Route::get('/contact/question/list', [HomeHTPContactController::class, 'questionList'])->name('questionListWebPay');

    //Product
    Route::get('/product', [HomeHTPProductController::class, 'index'])->name('productWebPay');
    Route::get('/product/integration', [HomeHTPProductController::class, 'integration'])->name('productIntegratedWebPay');
    Route::get('/product/cod', [HomeHTPProductController::class, 'cod'])->name('productCodWebPay');
    Route::get('/product/extend', [HomeHTPProductController::class, 'extend'])->name('productExtendWebPay');
    Route::get('/product/tool', [HomeHTPProductController::class, 'tool'])->name('productToolWebPay');

    //Page Policy
    Route::get('/thoa-thuan-nguoi-dung', [HomeHTPAboutController::class, 'userPolicy'])->name('userPolicyWebPay');
    Route::get('/chinh-sach-bao-mat', [HomeHTPAboutController::class, 'securityPolicy'])->name('securityPolicyWebPay');
    Route::get('/chinh-sach-giao-dịch', [HomeHTPAboutController::class, 'checkoutPolicy'])->name('checkoutPolicyWebPay');
    Route::get('/quy-dinh-khieu-nai-va-hoan-tien', [HomeHTPAboutController::class, 'returnPolicy'])->name('returnPolicyWebPay');

    //New
    Route::get('/news', [HomeHTPBlogController::class, 'index'])->name('newWebPay');
    Route::get('/news-details', [HomeHTPBlogController::class, 'show'])->name('newShowWebPay');

    //Rss feed
    Route::get('feed', [\App\Http\Controllers\RssFeedController::class, 'feed']);

    //Auth

});

//Subdomain
//Startup Domain
//Finder Domain
