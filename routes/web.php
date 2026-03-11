<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - مسیرهای وب
|--------------------------------------------------------------------------
|
| این فایل شامل مسیرهای تست برای نمایش قالب ادمین داشبورد است.
| برای تست، کافیه دستور php artisan serve رو اجرا کنید
| و در مرورگر آدرس http://localhost:8000/admin رو باز کنید.
|
*/

// صفحه اصلی سایت - ریدایرکت به پنل ادمین
Route::get('/', function () {
    return redirect('/admin');
});

// -------------------------------------------------------
// مسیرهای پنل ادمین
// -------------------------------------------------------
Route::prefix('admin')->group(function () {

    // داشبورد اصلی
    // آدرس: http://localhost:8000/admin
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // صفحه محصولات
    // آدرس: http://localhost:8000/admin/products
    Route::get('/products', function () {
        return view('admin.dashboard'); // فعلاً داشبورد نشون میده - بعداً عوض کنید
    })->name('admin.products.index');

    // صفحه افزودن محصول
    Route::get('/products/create', function () {
        return view('admin.dashboard');
    })->name('admin.products.create');

    // صفحه دسته‌بندی‌ها
    Route::get('/categories', function () {
        return view('admin.dashboard');
    })->name('admin.categories.index');

    // صفحه سفارشات
    // آدرس: http://localhost:8000/admin/orders
    Route::get('/orders', function () {
        return view('admin.dashboard');
    })->name('admin.orders.index');

    // صفحه مشتریان
    // آدرس: http://localhost:8000/admin/customers
    Route::get('/customers', function () {
        return view('admin.dashboard');
    })->name('admin.customers.index');

    // صفحه گزارشات
    Route::get('/reports', function () {
        return view('admin.dashboard');
    })->name('admin.reports.index');

    // صفحه تنظیمات عمومی
    Route::get('/settings', function () {
        return view('admin.dashboard');
    })->name('admin.settings.index');

    // صفحه کاربران
    Route::get('/users', function () {
        return view('admin.dashboard');
    })->name('admin.users.index');

    // صفحه تنظیمات پرداخت
    Route::get('/payment', function () {
        return view('admin.dashboard');
    })->name('admin.payment.index');

});

/*
|--------------------------------------------------------------------------
| راهنمای استفاده
|--------------------------------------------------------------------------
|
| ۱. مطمئن بشید لاراول نصبه: composer create-project laravel/laravel .
| ۲. فایل‌های views رو در resources/views/admin/ قرار بدید
| ۳. فایل‌های CSS و JS رو در public/admin/ قرار بدید
| ۴. سرور رو اجرا کنید: php artisan serve
| ۵. مرورگر رو باز کنید: http://localhost:8000/admin
|
| برای ساخت صفحات جدید:
| - یه فایل blade جدید بسازید مثلاً: resources/views/admin/products/index.blade.php
| - از قالب master استفاده کنید: @extends('admin.layouts.master')
| - محتوای صفحه رو در @section('content') قرار بدید
| - route رو به view جدید تغییر بدید
|
*/
