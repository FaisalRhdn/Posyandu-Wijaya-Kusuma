<?php
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TutorialController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Front\FrontLandingController;
use App\Http\Controllers\Front\FrontPostController;
use App\Http\Controllers\Front\FrontMenuController;
use App\Http\Controllers\Front\FrontContactController;
use App\Http\Controllers\Voyager\BalitaController;
use Illuminate\Support\Str;
use TCG\Voyager\Events\Routing;
use TCG\Voyager\Events\RoutingAdmin;
use TCG\Voyager\Events\RoutingAdminAfter;
use TCG\Voyager\Events\RoutingAfter;
use TCG\Voyager\Facades\Voyager;

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

Route::get('/', [FrontLandingController::class, 'index'])->name('landing');

Route::put('/update-umur-column', [BalitaController::class, 'updateUmurColumn'])->name('balitas.updateUmurColumn');

Route::post('/logout', 'Auth\LoginController@logout')->name('voyager.logout');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
