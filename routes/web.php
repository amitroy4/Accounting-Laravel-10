<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CurrencyTypeController;
use App\Http\Controllers\Admin\ChartOfAccountController;
use App\Http\Controllers\Admin\ProjectCategoryController;
use App\Http\Controllers\Admin\FundingOrganizationController;



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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



    Route::resource('/chart-of-accounts',ChartOfAccountController::class);

    Route::resource('/dashboard/company', CompanyController::class);
    Route::get('/dashboard/company/activeordeactive/{Id}', [CompanyController::class,'activeordeactive'])->name('company.activeordeactive');

    Route::resource('/dashboard/branch', BranchController::class);
    Route::get('/dashboard/branch/activeordeactive/{Id}', [BranchController::class,'activeordeactive'])->name('branch.activeordeactive');

    Route::resource('/dashboard/project', ProjectController::class);

    Route::resource('/dashboard/project_category', ProjectCategoryController::class);
    Route::get('/dashboard/project_category/activeordeactive/{Id}', [ProjectCategoryController::class,'activeordeactive'])->name('project_category.activeordeactive');

    Route::resource('/dashboard/funding_organization', FundingOrganizationController::class);
    Route::get('/dashboard/funding_organization/activeordeactive/{Id}', [FundingOrganizationController::class,'activeordeactive'])->name('funding_organization.activeordeactive');
    Route::delete('/dashboard/funding_organization/files/delete/{id}', [FundingOrganizationController::class,'filesdelete'])->name('funding_organization.filesdelete');
    Route::post('/dashboard/funding_organization/files/upload', [FundingOrganizationController::class, 'addFile'])->name('funding_organization.addfile');
    Route::resource('/dashboard/currency_type', CurrencyTypeController::class);
    Route::get('/dashboard/currency_type/activeordeactive/{Id}', [CurrencyTypeController::class,'activeordeactive'])->name('currency_type.activeordeactive');


    Route::resource('/dashboard/project', ProjectController::class);
    Route::get('/dashboard/project/activeordeactive/{Id}', [ProjectController::class,'activeordeactive'])->name('project.activeordeactive');
    Route::delete('/dashboard/project/files/delete/{id}', [ProjectController::class,'filesdelete'])->name('project.filesdelete');
    Route::post('/dashboard/project/files/upload', [ProjectController::class, 'addFile'])->name('project.addfile');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
