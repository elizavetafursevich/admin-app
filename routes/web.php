<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');




//Admin:

Route::get('/admin', function(){
    return require '../resources/views/admin/index.html';
});



Route::get('/apps-chat.html', function(){
   return require '../resources/views/admin/apps-chat.html';
});
Route::get('/apps-kanban-board.html', function(){
    return require '../resources/views/admin/apps-kanban-board.html';
});



Route::get('/auth-lock-screen.html', function(){
    return require '../resources/views/admin/auth-lock-screen.html';
});
Route::get('/auth-login.html', function(){
    return require '../resources/views/admin/auth-login.html';
});
Route::get('/auth-recoverpw.html', function(){
    return require '../resources/views/admin/auth-recoverpw.html';
});
Route::get('/auth-register.html', function(){
    return require '../resources/views/admin/auth-register.html';
});



Route::get('/calendar.html', function(){
    return require '../resources/views/admin/calendar.html';
});



Route::get('/charts-apex.html', function(){
    return require '../resources/views/admin/charts-apex.html';
});
Route::get('/charts-chartjs.html', function(){
    return require '../resources/views/admin/charts-chartjs.html';
});
Route::get('/charts-flot.html', function(){
    return require '../resources/views/admin/charts-flot.html';
});
Route::get('/charts-knob.html', function(){
    return require '../resources/views/admin/charts-knob.html';
});
Route::get('/charts-sparkline.html', function(){
    return require '../resources/views/admin/charts-sparkline.html';
});



Route::get('/ecommerce-add-product.html', function(){
    return require '../resources/views/admin/ecommerce-add-product.html';
});
Route::get('/ecommerce-cart.html', function(){
    return require '../resources/views/admin/ecommerce-cart.html';
});
Route::get('/ecommerce-checkout.html', function(){
    return require '../resources/views/admin/ecommerce-checkout.html';
});
Route::get('/ecommerce-customers.html', function(){
    return require '../resources/views/admin/ecommerce-customers.html';
});
Route::get('/ecommerce-orders.html', function(){
    return require '../resources/views/admin/ecommerce-orders.html';
});
Route::get('/ecommerce-product-detail.html', function(){
    return require '../resources/views/admin/ecommerce-product-detail.html';
});
Route::get('/ecommerce-products.html', function(){
    return require '../resources/views/admin/ecommerce-products.html';
});
Route::get('/ecommerce-shops.html', function(){
    return require '../resources/views/admin/ecommerce-shops.html';
});



Route::get('/email-inbox.html', function(){
    return require '../resources/views/admin/email-inbox.html';
});
Route::get('/email-read.html', function(){
    return require '../resources/views/admin/email-read.html';
});



Route::get('/form-advanced.html', function(){
    return require '../resources/views/admin/form-advanced.html';
});
Route::get('/form-editors.html', function(){
    return require '../resources/views/admin/form-editors.html';
});
Route::get('/form-elements.html', function(){
    return require '../resources/views/admin/form-elements.html';
});
Route::get('/form-mask.html', function(){
    return require '../resources/views/admin/form-mask.html';
});
Route::get('/form-uploads.html', function(){
    return require '../resources/views/admin/form-uploads.html';
});
Route::get('/form-validation.html', function(){
    return require '../resources/views/admin/form-validation.html';
});
Route::get('/form-wizard.html', function(){
    return require '../resources/views/admin/form-wizard.html';
});
Route::get('/form-xeditable.html', function(){
    return require '../resources/views/admin/form-xeditable.html';
});



Route::get('/icons-dripicons.html', function(){
    return require '../resources/views/admin/icons-dripicons.html';
});
Route::get('/icons-fontawesome.html', function(){
    return require '../resources/views/admin/icons-fontawesome.html';
});
Route::get('/icons-materialdesign.html', function(){
    return require '../resources/views/admin/icons-materialdesign.html';
});
Route::get('/icons-remix.html', function(){
    return require '../resources/views/admin/icons-remix.html';
});




Route::get('/index.html', function(){
    return require '../resources/views/admin/index.html';
});



Route::get('/layouts-boxed.html', function(){
    return require '../resources/views/admin/layouts-boxed.html';
});
Route::get('/layouts-compact-sidebar.html', function(){
    return require '../resources/views/admin/layouts-compact-sidebar.html';
});
Route::get('/layouts-horizontal.html', function(){
    return require '../resources/views/admin/layouts-horizontal.html';
});
Route::get('/layouts-icon-sidebar.html', function(){
    return require '../resources/views/admin/layouts-icon-sidebar.html';
});
Route::get('/layouts-light-sidebar.html', function(){
    return require '../resources/views/admin/layouts-light-sidebar.html';
});
Route::get('/layouts-preloader.html', function(){
    return require '../resources/views/admin/layouts-preloader.html';
});




Route::get('/maps-google.html', function(){
    return require '../resources/views/admin/maps-google.html';
});
Route::get('/maps-vector.html', function(){
    return require '../resources/views/admin/maps-vector.html';
});



Route::get('/pages-404.html', function(){
    return require '../resources/views/admin/pages-404.html';
});
Route::get('/pages-500.html', function(){
    return require '../resources/views/admin/pages-500.html';
});
Route::get('/pages-comingsoon.html', function(){
    return require '../resources/views/admin/pages-comingsoon.html';
});
Route::get('/pages-faqs.html', function(){
    return require '../resources/views/admin/pages-faqs.html';
});
Route::get('/pages-maintenance.html', function(){
    return require '../resources/views/admin/pages-maintenance.html';
});
Route::get('/pages-pricing.html', function(){
    return require '../resources/views/admin/pages-pricing.html';
});
Route::get('/pages-starter.html', function(){
    return require '../resources/views/admin/pages-starter.html';
});
Route::get('/pages-timeline.html', function(){
    return require '../resources/views/admin/pages-timeline.html';
});



Route::get('/tables-basic.html', function(){
    return require '../resources/views/admin/tables-basic.html';
});
Route::get('/tables-datatable.html', function(){
    return require '../resources/views/admin/tables-datatable.html';
});
Route::get('/tables-editable.html', function(){
    return require '../resources/views/admin/tables-editable.html';
});
Route::get('/tables-responsive.html', function(){
    return require '../resources/views/admin/tables-responsive.html';
});




Route::get('/ui-alerts.html', function(){
    return require '../resources/views/admin/ui-alerts.html';
});
Route::get('/ui-buttons.html', function(){
    return require '../resources/views/admin/ui-buttons.html';
});
Route::get('/ui-cards.html', function(){
    return require '../resources/views/admin/ui-cards.html';
});
Route::get('/ui-carousel.html', function(){
    return require '../resources/views/admin/ui-carousel.html';
});
Route::get('/ui-dropdowns.html', function(){
    return require '../resources/views/admin/ui-dropdowns.html';
});
Route::get('/ui-general.html', function(){
    return require '../resources/views/admin/ui-general.html';
});
Route::get('/ui-grid.html', function(){
    return require '../resources/views/admin/ui-grid.html';
});
Route::get('/ui-images.html', function(){
    return require '../resources/views/admin/ui-images.html';
});
Route::get('/ui-lightbox.html', function(){
    return require '../resources/views/admin/ui-lightbox.html';
});
Route::get('/ui-modals.html', function(){
    return require '../resources/views/admin/ui-modals.html';
});
Route::get('/ui-notifications.html', function(){
    return require '../resources/views/admin/ui-notifications.html';
});
Route::get('/ui-progressbars.html', function(){
    return require '../resources/views/admin/ui-progressbars.html';
});
Route::get('/ui-rangeslider.html', function(){
    return require '../resources/views/admin/ui-rangeslider.html';
});
Route::get('/ui-rating.html', function(){
    return require '../resources/views/admin/ui-rating.html';
});
Route::get('/ui-roundslider.html', function(){
    return require '../resources/views/admin/ui-roundslider.html';
});
Route::get('/ui-session-timeout.html', function(){
    return require '../resources/views/admin/ui-session-timeout.html';
});
Route::get('/ui-sweet-alert.html', function(){
    return require '../resources/views/admin/ui-sweet-alert.html';
});
Route::get('/ui-tabs-accordions.html', function(){
    return require '../resources/views/admin/ui-tabs-accordions.html';
});
Route::get('/ui-typography.html', function(){
    return require '../resources/views/admin/ui-typography.html';
});
Route::get('/ui-video.html', function(){
    return require '../resources/views/admin/ui-video.html';
});
