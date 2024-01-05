<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ChartController;

use App\Http\Controllers\ChatBotController;


use App\Http\Controllers\UbudeheController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\DeseaseController;
use App\Http\Controllers\DisabilityController;
use App\Http\Controllers\EldersApplicationController;
use App\Http\Controllers\ApplicationController;

  
Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('/how', [PageController::class, 'how'])->name('how');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/req', [PageController::class, 'req'])->name('req');
Route::resource('apply', ApplicationController::class);
Route::resource('application', EldersApplicationController::class);



Route::get('/chart-data', [ChartController::class, 'getChartData']);

  
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('permissions', PermissionController::class);
    Route::get('/users/{user_id}/approve', [UserController::class,'approve'])->name('users.approve');
    Route::get('/users',[UserController::class,"index"])->name('users.index');
    Route::get('/approval',[HomeController::class,"approval"])->name('approval');
    Route::resource('disability', DisabilityController::class);
    Route::resource('ubudehe', UbudeheController::class);
    Route::resource('education', EducationController::class);
    Route::resource('desease', DeseaseController::class);
    Route::resource('assety', AssetController::class);


    Route::get('/applications/approved', [ApplicationController::class, 'approvedApplications'])
    ->name('applications.approved');
    Route::get('/approved-applications', [ApplicationController::class, 'approvedApplications'])
    ->name('approved-applications.index');



// Change this route name
Route::get('applications/generate-approved-pdf', [ApplicationController::class, 'generateApprovedPDF'])
->name('applications.generate-approved-pdf');  // Update the route name here

Route::get('/applications', 'ApplicationController@index')->name('applications.index');



Route::get('/approved-applications', [ApplicationController::class, 'index'])->name('applications.index');
Route::get('/generate-approved-pdf', [ApplicationController::class, 'generatePdf'])->name('applications.generate-approved-pdf');




  
    Route::delete('applications/delete-rejected', [ApplicationController::class, 'deleteRejectedApplications']);

    // ... your other routes ...

Route::post('/applications/{application}/approve', [ApplicationController::class, 'approve'])->name('applications.approve');
Route::post('/applications/{application}/reject', [ApplicationController::class, 'reject'])->name('applications.reject');

// ... your other routes ...


});

Route::post('users/view-pdf', [PageController::class, 'viewPDF'])->name('view-pdf');
Route::post('users/download-pdf', [PageController::class, 'downloadPDF'])->name('download-pdf');
Route::get('/pages.report', [PageController::class, 'createPDF']);
Route::post('send',[ChatBotController::class,'sendChat']);


