{{-- سایدبار منوی ناوبری --}}
<aside class="admin-sidebar" id="adminSidebar">

    {{-- عنوان سایدبار --}}
    <div class="sidebar-header">
        <span class="sidebar-title">منوی مدیریت</span>
    </div>

    {{-- منوی ناوبری --}}
    <nav class="sidebar-nav">
        <ul class="nav-list">

            {{-- داشبورد --}}
            <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a href="{{ url('/admin') }}" class="nav-link">
                    <span class="nav-icon">&#127968;</span>
                    <span class="nav-label">داشبورد</span>
                </a>
            </li>

            {{-- محصولات با زیرمنو --}}
            <li class="nav-item has-submenu {{ request()->routeIs('admin.products*') ? 'active open' : '' }}">
                <a href="#" class="nav-link submenu-toggle">
                    <span class="nav-icon">&#128230;</span>
                    <span class="nav-label">محصولات</span>
                    <span class="submenu-arrow">&#9660;</span>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> لیست محصولات
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.products.create') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> افزودن محصول
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.categories*') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> دسته‌بندی‌ها
                        </a>
                    </li>
                </ul>
            </li>

            {{-- سفارشات --}}
            <li class="nav-item {{ request()->routeIs('admin.orders*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <span class="nav-icon">&#128722;</span>
                    <span class="nav-label">سفارشات</span>
                    <span class="badge badge-warning">۱۲</span>
                </a>
            </li>

            {{-- مشتریان --}}
            <li class="nav-item {{ request()->routeIs('admin.customers*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <span class="nav-icon">&#128101;</span>
                    <span class="nav-label">مشتریان</span>
                </a>
            </li>

            {{-- گزارشات --}}
            <li class="nav-item {{ request()->routeIs('admin.reports*') ? 'active' : '' }}">
                <a href="#" class="nav-link">
                    <span class="nav-icon">&#128202;</span>
                    <span class="nav-label">گزارشات</span>
                </a>
            </li>

            {{-- تنظیمات با زیرمنو --}}
            <li class="nav-item has-submenu {{ request()->routeIs('admin.settings*') ? 'active open' : '' }}">
                <a href="#" class="nav-link submenu-toggle">
                    <span class="nav-icon">&#9881;</span>
                    <span class="nav-label">تنظیمات</span>
                    <span class="submenu-arrow">&#9660;</span>
                </a>
                <ul class="submenu">
                    <li class="{{ request()->routeIs('admin.settings.general') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> تنظیمات عمومی
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.settings.users') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> کاربران
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.settings.payment') ? 'active' : '' }}">
                        <a href="#">
                            <span>&#9679;</span> درگاه پرداخت
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>

    {{-- نسخه سیستم در پایین سایدبار --}}
    <div class="sidebar-footer">
        <span>نسخه ۱.۰.۰</span>
    </div>

</aside>

{{-- پوشش تاریک برای موبایل --}}
<div class="sidebar-overlay" id="sidebarOverlay"></div>
