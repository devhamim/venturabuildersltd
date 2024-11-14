<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BackendController\AdminController;
use App\Http\Controllers\BackendController\AboutController;
use App\Http\Controllers\BackendController\ContactController;
use App\Http\Controllers\BackendController\WorkController;
use App\Http\Controllers\BackendController\ExperienceController;
use App\Http\Controllers\BackendController\PortfolioCategoryController;
use App\Http\Controllers\BackendController\PortfolioController;
use App\Http\Controllers\BackendController\BannerController;
use App\Http\Controllers\BackendController\SettingController;


use App\Http\Controllers\FrontendController\FrontContactController;
// use Illuminate\Support\Facades\Auth;

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
    return view('Frontend_template/index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', function () {
    return view('Backend_template/index');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



 // admin all route start
 Route::controller(AdminController::class)->group(function(){

    Route::get('/admin/logout', 'AdminLogout')->name('admin.logout');


    });
// admin all route end


 // Setting all route start
 Route::controller(SettingController::class)->group(function(){

    Route::get('/settings', 'Setting')->name('setting');
    Route::get('/settings/logo', 'Logo')->name('logo');
    Route::get('/settings/logo/change', 'LogoChange')->name('logo.change');
    Route::post('/settings/logo/store', 'LogoStore')->name('logo.store');
    // Route::get('/settings/logo/edit/{id}', 'LogoEdit')->name('logo.edit');
    // Route::post('/settings/logo/update', 'LogoUpdate')->name('logo.update');


    });
// Setting all route end

// Banner All route Start

Route::controller(BannerController::class)->group(function(){

    Route::get('/all/banner', 'AllBanner')->name('all.banner');
    Route::get('/add/banner', 'AddBanner')->name('add.banner');
    Route::post('/banner/store', 'StoreBanner')->name('banner.store');
    Route::get('/banner/edit/{id}', 'EditBanner')->name('banner.edit');
    Route::post('/banner/update/{id}', 'UpdateBanner')->name('banner.update');
    Route::get('/banner/delete/{id}', 'BannerDelete')->name('banner.delete');


    });
// Banner All route end

// About all route start
Route::controller(AboutController::class)->group(function(){

    Route::get('/all/about', 'AllAbout')->name('all.about');
    Route::get('/add/about', 'AddAbout')->name('add.about');
    Route::post('/about/store', 'StoreAbout')->name('about.store');
    Route::get('/about/edit/{id}', 'EditAbout')->name('edit.about');
    Route::post('/about/update/{id}', 'UpdateAbout')->name('update.about');
    Route::get('/about/delete/{id}', 'SoftDeleteAbout')->name('soft.delete.about');
    Route::get('/restore/about/{id}', 'RestoreAbout')->name('restore.about');
    Route::get('/permanent.delete/{id}', 'PermanentDelete')->name('perma.delete');

    });
// About all route end


// contact all route start
Route::controller(ContactController::class)->group(function(){

    Route::get('/contact/all', 'ContactAll')->name('contact.all');
    Route::get('/add/contact', 'ContactAdd')->name('contact.add');
    Route::post('/contact/store', 'ContactStore')->name('contact.store');
    Route::get('/contact/edit/{id}', 'ContactEdit')->name('contact.edit');
    Route::post('/contact/update/{id}', 'ContactUpdate')->name('update.contact');
    Route::get('/contact/delete/{id}', 'ContactSoftDelete')->name('contact.delete');
    Route::get('/contact/restore/{id}', 'ContactRestore')->name('contact.restore');
    Route::get('/contact/parmanent/delete/{id}', 'ContactForceDelete')->name('contact.parmanent.delete');


    });
// contact all route end


// work all route start
Route::controller(WorkController::class)->group(function(){

    Route::get('/work/category/all', 'WorkCatAll')->name('work.category.all');
    Route::get('/work/category/add', 'WorkCatAdd')->name('add.work.category');
    Route::post('/work/category/store', 'WorkCatStore')->name('work.category.store');
    Route::get('/work/category/edit/{id}', 'WorkCatEdit')->name('work.category.edit');
    Route::post('/work/category/update/{id}', 'WorkCatUpdate')->name('work.category.update');
    Route::get('/work/category/delete/{id}', 'WorkCatSoftDelete')->name('work.category.delete');
    Route::get('/work/category/restore/{id}', 'WorkCatRestore')->name('work.category.restore');
    Route::get('/work/category/parmanent/delete/{id}', 'WorkCatForceDelete')->name('work.category.parmanent.delete');

    });
// work all route end

// experience all route start
Route::controller(ExperienceController::class)->group(function(){

    Route::get('/experience/category/all', 'ExperienceCatAll')->name('experience.category.all');
    Route::get('/experience/category/add', 'ExperienceCatAdd')->name('add.Experience.category');
    Route::post('/experience/category/store', 'ExperienceCatStore')->name('experience.category.store');
    Route::get('/experience/category/edit/{id}', 'ExperienceCatEdit')->name('experience.category.edit');
    Route::post('/experience/category/update/{id}', 'ExperienceCatUpdate')->name('experience.category.update');
    Route::get('/experience/category/delete/{id}', 'ExperienceCatDelete')->name('experience.category.delete');
    Route::get('/experience/category/restore/{id}', 'ExperienceCatRestore')->name('experience.category.restore');
    Route::get('/experience/category/parmanent/delete/{id}', 'ExperienceCatForceDelete')->name('experience.category.parmanent.delete');


    });
// experience all route end


// Portfolio Category  all route start
Route::controller(PortfolioCategoryController::class)->group(function(){

    Route::get('/portfolio/category/all', 'PortfolioCatAll')->name('portfolio.category.all');
    Route::get('/portfolio/category/add', 'PortfolioCatAdd')->name('add.portfolio.category');
    Route::post('/portfolio/category/store', 'PortfolioCatStore')->name('portfolio.category.store');
    Route::get('/portfolio/category/edit/{id}', 'PortfolioCatEdit')->name('portfolio.category.edit');
    Route::post('/portfolio/category/update/{id}', 'PortfolioCatUpdate')->name('portfolio.category.update');
    Route::get('/portfolio/category/delete/{id}', 'PortfolioCatDelete')->name('portfolio.category.delete');
    Route::get('/portfolio/category/restore/{id}', 'PortfolioCatRestore')->name('portfolio.category.restore');
    Route::get('/portfolio/category/parmanent/delete/{id}', 'PortfolioCatForceDelete')->name('portfolio.category.parmanent.delete');


    });
// Portfolio Category all route end


// Portfolio all route start
Route::controller(PortfolioController::class)->group(function(){

    Route::get('/portfolio/all', 'PortfolioAll')->name('portfolio.all');
    Route::get('/portfolio/add', 'PortfolioAdd')->name('add.portfolio');
    Route::post('/portfolio/store', 'PortfolioStore')->name('store.portfolio');
    Route::get('/portfolio/edit/{id}', 'PortfolioEdit')->name('edit.portfolio');
    Route::post('/portfolio/update/{id}', 'PortfolioUpdate')->name('update.portfolio');
    Route::get('/portfolio/delete/{id}', 'PortfolioDelete')->name('delete.portfolio');
    });
// Portfolio all route end

// All Frontend Controller View Work Start

// Portfolio all route start
Route::controller(FrontContactController::class)->group(function(){

    Route::get('/banner/details/{id}', 'BannerDetail')->name('banner.details');
    Route::get('/contact/us', 'ContactUs')->name('contact.us');
    Route::get('/about/us', 'AboutUs')->name('about.us');
    Route::get('/portfolio/details/{id}', 'PortfolioDetails')->name('portfolio.details');
    });
// Portfolio all route end



