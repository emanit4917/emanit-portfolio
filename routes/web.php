<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SocailController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BrandController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'frontend'])->name('frontend');

//__Header Nav Section__//
Route::get('/index', [NavbarController::class, 'view'])->name('navbar');
Route::post('/nav/insert', [NavbarController::class, 'create'])->name('nav.insert');
Route::post('/edit/insert/{id}', [NavbarController::class, 'edit'])->name('edit.insert');
Route::get('/delete/{id}', [NavbarController::class, 'delete'])->name('delete');

//__Banner Section Route___//
Route::get('/banner', [BannerController::class, 'index'])->name('banner.section');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/create', [BannerController::class, 'createbanner'])->name('banner.create');
Route::get('/delete/banner/{id}', [BannerController::class, 'delete'])->name('delete.banner');

//__Social Icon Section Route___//
Route::get('/social/icon', [SocailController::class, 'social'])->name('social.icon');
Route::post('/social/store', [SocailController::class, 'socialstore'])->name('social.store');
Route::get('/delete/social/{id}', [SocailController::class, 'destory'])->name('delete.social');

//__Social Icon Section Route___//
Route::get('/education/section', [EducationController::class, 'index'])->name('education.section');
Route::post('/eduction/store', [EducationController::class, 'store'])->name('eduction.store');
Route::get('/education/data', [EducationController::class, 'createedu'])->name('education.data');
Route::get('/delete/education/{id}', [EducationController::class, 'destroy'])->name('delete.education');

//Contact  Section footer Route___//
Route::post('/contact/store', [FrontendController::class, 'store'])->name('contact.store');


//Address  information and address  footer Route___//
Route::get('/address/information', [AddressController::class, 'index'])->name('address.information');
Route::post('/contacts/store', [AddressController::class, 'storeaddress'])->name('contacts.store');
Route::get('/create', [AddressController::class, 'create'])->name('create.niew');
Route::get('/delete/address/{id}', [AddressController::class, 'delete'])->name('delete.address');
Route::get('/edit/address/{id}', [AddressController::class, 'edit'])->name('edit.address');
Route::post('/edit/updated/{id}', [AddressController::class, 'updatededit'])->name('edit.updated');


//Service  Section Route___//
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::post('/service/store', [ServiceController::class, 'storeservice'])->name('service.store');
Route::get('/service/view', [ServiceController::class, 'views'])->name('service.view');
Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');


//Counter Aria  Section Route___//
Route::get('/counter/aria', [CounterController::class, 'index'])->name('counter.aria');
Route::post('/counter/store', [CounterController::class, 'storecounter'])->name('counter.store');
Route::get('/counter/create', [CounterController::class, 'createcount'])->name('counter.create');
Route::get('/delete/counter/{id}', [CounterController::class, 'deletecounter'])->name('delete.counter');

//__Portfolios-area Route__//

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::post('/portfolio/store', [PortfolioController::class, 'storeportf'])->name('portfolio.store');
Route::get('/portfolio/create', [PortfolioController::class, 'createport'])->name('portfolio.create');
Route::get('/destroy/portfolio/{id}', [PortfolioController::class, 'destroyport'])->name('destroy.portfolio');
Route::get('/edit/portfolio/{id}', [PortfolioController::class, 'edit'])->name('edit.portfolio');
Route::post('/portfolio/updated/{id}', [PortfolioController::class, 'updated'])->name('portfolio.updated');
Route::get('/portfolio/page/{id}', [PortfolioController::class, 'singlepage'])->name('portfolio.single');

//__Testimonial-area-area Route__//
Route::get('/testmonial', [TestimonialController::class, 'index'])->name('testmonial');
Route::post('/testmonial/store', [TestimonialController::class, 'store'])->name('testmonial.store');
Route::get('/testmonial/create', [TestimonialController::class, 'create'])->name('testmonial.create');
Route::get('/destroy.testmonial/{id}', [TestimonialController::class, 'destroy'])->name('destroy.testmonial');
Route::get('/edit/testmonial/{id}', [TestimonialController::class, 'edit'])->name('edit.testmonial');
Route::post('/testmonial/update/{id}', [TestimonialController::class, 'update'])->name('testmonial.update');

//__Testimonial-area-area Route__//
Route::get('/brand', [BrandController::class, 'index'])->name('brand.aria');
Route::post('/brand/store', [BrandController::class, 'store'])->name('brand.store');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::get('/destroy/brands/{id}', [BrandController::class, 'destroy'])->name('destroy.brands');