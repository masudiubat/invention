<?php

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\AgentController;
use App\Http\Controllers\frontend\CareerController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\frontend\ProjectTypeController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\admin\AdminProjectController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminServiceController;
use App\Http\Controllers\admin\AdminProjectTypeController;
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

Route::get('/locale/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'bn'])) {
        abort(400);
    }

    Session::put('locale', $locale);

    return response()->json(['msg' => $locale], 200);
});

Route::get('/menu-items', [HomeController::class, 'search_menu_items'])->name('home.menu-items');
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/service/show/{id}',  [ServiceController::class, 'show'])->name('service.show');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/project/type/show/{id}', [ProjectTypeController::class, 'show'])->name('project.type.show');
Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/show/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/career', [CareerController::class, 'index'])->name('career.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');



Route::group(['as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/adproject', [AdminProjectController::class, 'index'])->name('adproject.index');
    Route::get('/adproject/create', [AdminProjectController::class, 'create'])->name('adproject.create');
    Route::get('/adproject/show/{id}', [AdminProjectController::class, 'show'])->name('adproject.show');
    Route::get('/adproject/edit/{id}', [AdminProjectController::class, 'edit'])->name('adproject.edit');
    Route::post('/adproject/store', [AdminProjectController::class, 'store'])->name('adproject.store');

    Route::get('/adservice', [AdminServiceController::class, 'index'])->name('adservice.index');
    Route::get('/adservice/create', [AdminServiceController::class, 'create'])->name('adservice.create');
    Route::get('/adservice/show/{id}', [AdminServiceController::class, 'show'])->name('adservice.show');
    Route::get('/adservice/edit/{id}', [AdminServiceController::class, 'edit'])->name('adservice.edit');


    Route::get('/adminproject/type', [AdminProjectTypeController::class, 'index'])->name('adminproject.type.index');
    Route::get('/adminproject/type/create', [AdminProjectTypeController::class, 'create'])->name('adminproject.type.create');
    Route::get('/adminproject/type/show/{id}', [AdminProjectTypeController::class, 'show'])->name('adminproject.type.show');
    Route::get('/adminproject/type/edit/{id}', [AdminProjectTypeController::class, 'edit'])->name('adminproject.type.edit');

    Route::get('/adpost', [AdminPostController::class, 'index'])->name('adpost.index');
    Route::get('/adpost/create', [AdminPostController::class, 'create'])->name('adpost.create');
    Route::get('/adcategory', [AdminCategoryController::class, 'index'])->name('adcategory.index');
    Route::get('/adcategory/create', [AdminCategoryController::class, 'create'])->name('adcategory.create');
});

Route::get('/starter', function () {
    return view('pages.admin.starter');
});
