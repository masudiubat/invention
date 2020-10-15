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
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\admin\AdminProjectController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\admin\AdminCategoryController;
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


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/service',  [ServiceController::class, 'index'])->name('service.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
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
    Route::get('/adpost', [AdminPostController::class, 'index'])->name('adpost.index');
    Route::get('/adpost/create', [AdminPostController::class, 'create'])->name('adpost.create');
    Route::get('/adcategory', [AdminCategoryController::class, 'index'])->name('adcategory.index');
    Route::get('/adcategory/create', [AdminCategoryController::class, 'create'])->name('adcategory.create');
});

Route::get('/starter', function () {
    return view('pages.admin.starter');
});
