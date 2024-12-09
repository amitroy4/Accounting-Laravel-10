<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CurrencyTypeController;
use App\Http\Controllers\FundingOrganizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

    //
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
    Route::resource('/dashboard/currency_type', CurrencyTypeController::class);
    Route::get('/dashboard/currency_type/activeordeactive/{Id}', [CurrencyTypeController::class,'activeordeactive'])->name('currency_type.activeordeactive');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
