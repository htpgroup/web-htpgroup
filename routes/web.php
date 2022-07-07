<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Web\BlogController as HomeHTPBlogController;
use App\Http\Controllers\Web\ContactController as HomeHTPContactController;
use App\Http\Controllers\Web\HomeController as HomeHTPHomeController;
use App\Http\Controllers\Web\PageController as HomeHTPAboutController;
use App\Http\Controllers\Web\ProductController as HomeHTPProductController;
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

// Auth Routes
require __DIR__.'/auth.php';

// Language Switch
Route::get('language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('dashboard', 'App\Http\Controllers\Frontend\FrontendController@index')->name('dashboard');
/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Web', 'as' => 'HomeHTP.'], function () {
    Route::get('/', [HomeHTPHomeController::class, 'index'])->name('homeWebPay');

    Route::get('/clear-cache', function () {
        $exitCode = Artisan::call('cache:clear');
        $exitCode = Artisan::call('view:clear');
        // return what you want
        return '<h2>Cache facade value cleared</h2>';
    });

    //Page
    Route::get('/gioi-thieu', [HomeHTPAboutController::class, 'about'])->name('aboutWebPay');
    Route::get('/gioi-thieu/supply', [HomeHTPAboutController::class, 'supply'])->name('supplyWebPay');
    Route::get('/gioi-thieu/license', [HomeHTPAboutController::class, 'license'])->name('licenseWebPay');

    //Contact
    Route::get('/lien-he', [HomeHTPContactController::class, 'index'])->name('contactWebPay');
    Route::post('/gui-lien-he', [HomeHTPContactController::class, 'storeContactForm'])->name('contact-form.store');

    Route::get('/contact/question', [HomeHTPContactController::class, 'question'])->name('questionWebPay');
    Route::get('/contact/question/list', [HomeHTPContactController::class, 'questionList'])->name('questionListWebPay');

    //Product
    Route::get('/linh-vuc', [HomeHTPProductController::class, 'index'])->name('productWebPay');
    Route::get('/linh-vuc/integration', [HomeHTPProductController::class, 'integration'])->name('productIntegratedWebPay');
    Route::get('/linh-vuc/cod', [HomeHTPProductController::class, 'cod'])->name('productCodWebPay');
    Route::get('/linh-vuc/extend', [HomeHTPProductController::class, 'extend'])->name('productExtendWebPay');
    Route::get('/linh-vuc/tool', [HomeHTPProductController::class, 'tool'])->name('productToolWebPay');

    //Page Policy
    Route::get('/thoa-thuan-nguoi-dung', [HomeHTPAboutController::class, 'userPolicy'])->name('userPolicyWebPay');
    Route::get('/chinh-sach-bao-mat', [HomeHTPAboutController::class, 'securityPolicy'])->name('securityPolicyWebPay');
    Route::get('/chinh-sach-giao-dịch', [HomeHTPAboutController::class, 'checkoutPolicy'])->name('checkoutPolicyWebPay');
    Route::get('/quy-dinh-khieu-nai-va-hoan-tien', [HomeHTPAboutController::class, 'returnPolicy'])->name('returnPolicyWebPay');

    //New
    Route::get('/tin-tuc', [HomeHTPBlogController::class, 'index'])->name('newWebPay');
    Route::get('/chi-tiet-tin-tuc/{slug?}/{id}', [HomeHTPBlogController::class, 'show'])->name('newShowWebPay');
    //New
    Route::get('/tuyen-dung', [HomeHTPBlogController::class, 'recruitmentIndex'])->name('recruitmentWebPay');
    Route::get('/chi-tiet-tuyen-dung/{slug}/{id}', [HomeHTPBlogController::class, 'recruitmentShow'])->name('recruitmentShowWebPay');
});

Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/web', 'FrontendController@index')->name('index');

    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');

    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/{id}', ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get('profile/changePassword/{username}', ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch('profile/changePassword/{username}', ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    });
});

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/
//admin3ds5graco8fci
$adminPrefix = env('ADMIN_PREFIX', 'admin');
Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => $adminPrefix, 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {


    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("$module_name", "$controller_name@index")->name("$module_name");
        Route::post("$module_name", "$controller_name@store")->name("$module_name.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/markAllAsRead", ['as' => "$module_name.markAllAsRead", 'uses' => "$controller_name@markAllAsRead"]);
    Route::delete("$module_name/deleteAll", ['as' => "$module_name.deleteAll", 'uses' => "$controller_name@deleteAll"]);
    Route::get("$module_name/{id}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/download/{file_name}", ['as' => "$module_name.download", 'uses' => "$controller_name@download"]);
    Route::get("$module_name/delete/{file_name}", ['as' => "$module_name.delete", 'uses' => "$controller_name@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("$module_name", "$controller_name");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("$module_name/profile/{id}", ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
    Route::get("$module_name/profile/{id}/edit", ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
    Route::patch("$module_name/profile/{id}/edit", ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
    Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
    Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    Route::get("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePassword", 'uses' => "$controller_name@changeProfilePassword"]);
    Route::patch("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePasswordUpdate", 'uses' => "$controller_name@changeProfilePasswordUpdate"]);
    Route::get("$module_name/changePassword/{id}", ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
    Route::patch("$module_name/changePassword/{id}", ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::resource("$module_name", "$controller_name");
    Route::patch("$module_name/{id}/block", ['as' => "$module_name.block", 'uses' => "$controller_name@block", 'middleware' => ['permission:block_users']]);
    Route::patch("$module_name/{id}/unblock", ['as' => "$module_name.unblock", 'uses' => "$controller_name@unblock", 'middleware' => ['permission:block_users']]);
});
