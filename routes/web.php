<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MunicipalityBudgetController;
use App\Http\Controllers\JournalEntriesController;
use App\Http\Controllers\TrialBalanceEntriesController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\DeficitOperationController;
use App\Http\Controllers\LiabilitiesController;
use App\Http\Controllers\OperationExpensesController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TransactionLogController;
use App\Http\Controllers\BudgetUtilizationReportController;
use App\Http\Controllers\CashDisbursementMonitoringController;
use App\Http\Controllers\PurchaseRequestMonitoringController;

Route::get('/', function () {
    return redirect('/login');
});



Route::post('/municipality-budget/store', [MunicipalityBudgetController::class, 'store'])->name('municipality-budget.store');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return redirect('/budget-allocation/dashboard');
    });

    Route::get('/collection', function () {return view('/pages.collections.index'); });
    Route::get('/disbursement', function () {return view('/pages.disbursement.index'); });
    Route::get('/general-journal', function () {return view('/pages.journals.index'); });
    Route::get('/advice-on-file', function () {return view('/pages.aof.index'); });
    Route::get('/reports', function () {return view('/pages.reports.index'); });
    Route::get('/bank-accounts', function () {return view('/pages.banks.index'); });
    Route::get('/account-list', function () {return view('/pages.users.index'); });

    Route::get('/transactions', [TransactionLogController::class, 'index']);
    Route::post('/transactions/registration', [TransactionLogController::class, 'store'])->name('transactions.save');

    Route::get('/budgetUR', [BudgetUtilizationReportController::class, 'index']);
    Route::post('/budgetUR/registration', [BudgetUtilizationReportController::class, 'store'])->name('budgets.save');

    Route::get('/cashDM', [CashDisbursementMonitoringController::class, 'index']);
    Route::post('/cashDM/registration', [CashDisbursementMonitoringController::class, 'store'])->name('cashs.save');

    Route::get('/purchaseRM', [PurchaseRequestMonitoringController::class, 'index']);
    Route::post('/purchaseRM/registration', [PurchaseRequestMonitoringController::class, 'store'])->name('purchase.save');

    Route::get('/misc/journal', [JournalEntriesController::class, 'index']);
    Route::post('/journal/registration', [JournalEntriesController::class, 'store'])->name('journals.save');
   

    Route::get('/misc/revenue', [RevenueController::class, 'index']);
    Route::post('/revenue/registration', [RevenueController::class, 'store'])->name('revenue.save');

    Route::get('/misc/assets',  [AssetsController::class, 'index']);
    Route::post('/assets/registration', [AssetsController::class, 'store'])->name('assets.save');

    Route::get('/misc/liabilities', [LiabilitiesController::class, 'index']);
    Route::post('/liabilities/registration', [LiabilitiesController::class, 'store'])->name('liabilities.save');

    Route::get('/misc/departments', [DepartmentController::class, 'index']);
    Route::post('/departments/registration', [DepartmentController::class, 'store'])->name('department.save');
  

    Route::get('/misc/trial-balance', [TrialBalanceEntriesController::class, 'index']);
    Route::post('/trial-balance/registration', [TrialBalanceEntriesController::class, 'store'])->name('trialBalance.save');

    Route::get('/misc/operation-expenses', [OperationExpensesController::class, 'index']);
    Route::post('/operation-expenses/registration', [OperationExpensesController::class, 'store'])->name('operation.save');

    Route::get('/misc/deficit-operation',  [DeficitOperationController::class, 'index']);
    Route::post('/deficit-operation/registration', [DeficitOperationController::class, 'store'])->name('decifit.save');

    // ** Budget Allocation ** //
    Route::get('/lgu/dashboard', function(){
        return redirect('/budget-allocation/dashboard');
    });
    Route::get('/budget-allocation/dashboard', [MunicipalityBudgetController::class, 'dashboard'])->name('budget.allocation');
    Route::get('/budget-allocation/list', [MunicipalityBudgetController::class, 'index']);

    // ** Projects ** //
    // Route::get('/projects', [ProjectController::class, 'index']);
    // Route::get('/projects/details/{id}', [ProjectController::class, 'details']);
    // Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');
    // Route::post('/projects/update', [ProjectController::class, 'update'])->name('projects.update');

    // // ** Employee ** //    
    // Route::get('/employee', [EmployeeController::class, 'index']);
    // Route::post('/employee/registration', [EmployeeController::class, 'store'])->name('employee.save');

    // // ** Reports ** //    
    // Route::get('/reports', [ReportsController::class, 'index']);
    // Route::get('/reports/print', [ReportsController::class, 'print']);
    // Route::get('/projects/print/{id}', [ProjectController::class, 'print_checklist']);    

    // // ** Resources ** //    
    // Route::get('/resources', [ResourcesController::class, 'index']);
    // Route::post('/resources/registration', [ResourcesController::class, 'store'])->name('resources.save');
});
