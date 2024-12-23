<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\WebSettingController;
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
Route::get('/storage_link', function () {
    Artisan::call('storage:link');
    return redirect()->back()->with('success', 'Storage link created successfully.');
});

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
    Route::get('/dashboard/companies/{company}/branches', [CompanyController::class, 'getCompanyBranches']);
    Route::post('/dashboard/companies/company-wise-branch',[CompanyController::class, 'companywisebranch'])->name('company.branch');
    Route::delete('/dashboard/companies/company-branch-remove/{company_id}/{branch_id}',[CompanyController::class, 'companyBranchRemove'])->name('company.branch.remove');

    Route::resource('/dashboard/branch', BranchController::class);
    Route::get('/dashboard/branch/activeordeactive/{Id}', [BranchController::class,'activeordeactive'])->name('branch.activeordeactive');
    Route::post('/dashboard/branch/branch-wise-project',[BranchController::class, 'branchwiseproject'])->name('branch.project');

    Route::resource('/dashboard/project_category', ProjectCategoryController::class);
    Route::get('/dashboard/project_category/activeordeactive/{Id}', [ProjectCategoryController::class,'activeordeactive'])->name('project_category.activeordeactive');

    Route::resource('/dashboard/funding_organization', FundingOrganizationController::class);
    Route::get('/dashboard/funding_organization/activeordeactive/{Id}', [FundingOrganizationController::class,'activeordeactive'])->name('funding_organization.activeordeactive');
    Route::delete('/dashboard/funding_organization/files/delete/{id}', [FundingOrganizationController::class,'filesdelete'])->name('funding_organization.filesdelete');
    Route::post('/dashboard/funding_organization/files/upload', [FundingOrganizationController::class, 'addFile'])->name('funding_organization.addfile');
    Route::resource('/dashboard/currency_type', CurrencyTypeController::class);
    Route::get('/dashboard/currency_type/activeordeactive/{Id}', [CurrencyTypeController::class,'activeordeactive'])->name('currency_type.activeordeactive');

    // Project Routes
    Route::resource('/dashboard/project', ProjectController::class);
    Route::get('/dashboard/project/activeordeactive/{Id}', [ProjectController::class,'activeordeactive'])->name('project.activeordeactive');
    Route::delete('/dashboard/project/files/delete/{id}', [ProjectController::class,'filesdelete'])->name('project.filesdelete');
    Route::post('/dashboard/project/files/upload', [ProjectController::class, 'addFile'])->name('project.addfile');
    Route::get('/dashboard/project/get-debit-account/{projectId}', [ProjectController::class, 'DebitAccount']);
    Route::get('/dashboard/project/get-credit-account/{projectId}', [ProjectController::class, 'CreditAccount']);

    Route::get('vouchers/index', [VoucherController::class,'index'])->name('vouchers.index');
    Route::get('vouchers/create', [VoucherController::class,'create'])->name('vouchers.create');

    //Users Routes
    Route::resource('users',UserController::class);
    Route::get('/users/members/{id}/get-member', [UserController::class, 'getMember'])->name('users.get-member');
    Route::post('/users/members/{id}/assign', [UserController::class, 'assignMember'])->name('users.assign-member');
    Route::delete('/users/assign-member/remove/{memberId}/{userId}', [UserController::class, 'assignMemberRemove'])->name('users.assign-member.remove');
    Route::get('/users/status/{id}', [UserController::class, 'status'])->name('users.status');
    Route::get('/users/users-search/search-by-name', [UserController::class, 'usersSearchByName'])->name('users.users-search-by-name');
    // Route::post('/dashboard/users/roles/{role}', [RoleController::class, 'update'])->name('roles.update')->middleware('auth');

    //Roles Routes
    Route::resource('/dashboard/users/roles', RoleController::class)->middleware('auth');
    Route::get('/dashboard/users/roles/{roleId}/give-permissions',[RoleController::class, 'addPermission'])->name('roles.give-permissions')->middleware('auth');
    Route::put('/dashboard/users/roles/{roleId}/give-permissions',[RoleController::class, 'addPermissionToRole'])->name('roles.add-permission')->middleware('auth');
    Route::delete('/dashboard/users/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.destroy');

    //Permissions Routes
    Route::resource('/dashboard/users/permissions', PermissionController::class)->middleware('auth');
    Route::delete('/dashboard/users/permissions/bulkdelete', [PermissionController::class, 'bulkDelete'])->name('permissions.bulk_delete');
    Route::delete('/dashboard/users/permissions/{id}/delete', [PermissionController::class, 'destroy'])->name('permissions.destroy');

    Route::resource('/dashboard/websetting',WebSettingController::class);

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
