<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

Route::get('/admin/users-with-orders', [AdminController::class, 'viewUsersWithOrders'])->name('admin.usersWithOrders');


Route::prefix('admin')->group(function () {
    Route::get('/orders', [AdminController::class, 'viewOrders'])->name('admin.orders.index');
    Route::patch('/orders/{order}', [AdminController::class, 'updateOrderStatus'])->name('admin.orders.update');
    Route::patch('/orders/{order}/update', [AdminController::class, 'updateOrderStatus'])->name('admin.orders.update');
});

