@extends('admin.layouts.master')

@section('title', 'داشبورد - پنل مدیریت')

@section('content')

{{-- عنوان صفحه --}}
<div class="page-header">
    <h1 class="page-title">داشبورد</h1>
    <div class="breadcrumb">
        <span>&#127968;</span>
        <span class="breadcrumb-sep">/</span>
        <span>داشبورد</span>
    </div>
</div>

{{-- ۴ کارت آماری --}}
<div class="stats-grid">

    {{-- کارت کل فروش --}}
    <div class="stat-card stat-card--blue">
        <div class="stat-card__icon">&#128179;</div>
        <div class="stat-card__content">
            <h3 class="stat-card__title">کل فروش</h3>
            <p class="stat-card__value">۱۲۵,۴۸۰,۰۰۰</p>
            <small class="stat-card__unit">تومان</small>
        </div>
        <div class="stat-card__footer">
            <span class="trend trend--up">&#9650; ۱۲٪</span>
            <span>نسبت به ماه گذشته</span>
        </div>
    </div>

    {{-- کارت تعداد سفارشات --}}
    <div class="stat-card stat-card--green">
        <div class="stat-card__icon">&#128722;</div>
        <div class="stat-card__content">
            <h3 class="stat-card__title">تعداد سفارشات</h3>
            <p class="stat-card__value">۳۴۸</p>
            <small class="stat-card__unit">سفارش</small>
        </div>
        <div class="stat-card__footer">
            <span class="trend trend--up">&#9650; ۸٪</span>
            <span>نسبت به ماه گذشته</span>
        </div>
    </div>

    {{-- کارت تعداد مشتریان --}}
    <div class="stat-card stat-card--orange">
        <div class="stat-card__icon">&#128101;</div>
        <div class="stat-card__content">
            <h3 class="stat-card__title">تعداد مشتریان</h3>
            <p class="stat-card__value">۱,۲۵۶</p>
            <small class="stat-card__unit">نفر</small>
        </div>
        <div class="stat-card__footer">
            <span class="trend trend--up">&#9650; ۵٪</span>
            <span>نسبت به ماه گذشته</span>
        </div>
    </div>

    {{-- کارت تعداد محصولات --}}
    <div class="stat-card stat-card--red">
        <div class="stat-card__icon">&#128230;</div>
        <div class="stat-card__content">
            <h3 class="stat-card__title">تعداد محصولات</h3>
            <p class="stat-card__value">۵۸۴</p>
            <small class="stat-card__unit">محصول</small>
        </div>
        <div class="stat-card__footer">
            <span class="trend trend--down">&#9660; ۲٪</span>
            <span>نسبت به ماه گذشته</span>
        </div>
    </div>

</div>

{{-- جدول سفارشات اخیر --}}
<div class="card">
    <div class="card-header">
        <h2 class="card-title">&#128203; سفارشات اخیر</h2>
        <a href="#" class="btn btn-primary btn-sm">مشاهده همه</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>شماره سفارش</th>
                        <th>نام مشتری</th>
                        <th>وضعیت</th>
                        <th>مبلغ (تومان)</th>
                        <th>تاریخ</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>#۱۰۰۱</strong></td>
                        <td>علی محمدی</td>
                        <td><span class="badge badge-success">تحویل داده شده</span></td>
                        <td>۱,۲۵۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۵</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۲</strong></td>
                        <td>فاطمه حسینی</td>
                        <td><span class="badge badge-warning">در حال پردازش</span></td>
                        <td>۸۵۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۶</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۳</strong></td>
                        <td>محمد رضایی</td>
                        <td><span class="badge badge-info">ارسال شده</span></td>
                        <td>۲,۱۰۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۷</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۴</strong></td>
                        <td>زهرا کریمی</td>
                        <td><span class="badge badge-danger">لغو شده</span></td>
                        <td>۶۵۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۷</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۵</strong></td>
                        <td>احمد نجفی</td>
                        <td><span class="badge badge-success">تحویل داده شده</span></td>
                        <td>۳,۴۵۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۸</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۶</strong></td>
                        <td>مریم صادقی</td>
                        <td><span class="badge badge-warning">در انتظار پرداخت</span></td>
                        <td>۱,۸۰۰,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۸</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>#۱۰۰۷</strong></td>
                        <td>حسن موسوی</td>
                        <td><span class="badge badge-info">ارسال شده</span></td>
                        <td>۹۲۵,۰۰۰</td>
                        <td>۱۴۰۴/۰۱/۱۹</td>
                        <td>
                            <a href="#" class="btn btn-info btn-xs">مشاهده</a>
                            <a href="#" class="btn btn-warning btn-xs">ویرایش</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
