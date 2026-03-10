{{-- هدر پنل مدیریت --}}
<header class="admin-header" id="adminHeader">

    {{-- دکمه تاگل سایدبار --}}
    <button class="sidebar-toggle" id="sidebarToggle" title="باز/بسته کردن منو">
        <span class="toggle-icon">&#9776;</span>
    </button>

    {{-- لوگوی سایت --}}
    <div class="header-logo">
        <a href="{{ url('/admin') }}">
            <span class="logo-icon">&#127968;</span>
            <span class="logo-text">پنل مدیریت</span>
        </a>
    </div>

    {{-- نوار جستجو --}}
    <div class="header-search">
        <form action="#" method="GET" class="search-form">
            <input
                type="text"
                name="q"
                placeholder="جستجو در پنل..."
                class="search-input"
                autocomplete="off"
            >
            <button type="submit" class="search-btn" title="جستجو">
                &#128269;
            </button>
        </form>
    </div>

    {{-- بخش سمت چپ هدر --}}
    <div class="header-actions">

        {{-- آیکون اعلانها --}}
        <div class="notification-wrapper" id="notificationWrapper">
            <button class="notification-btn" id="notificationBtn" title="اعلانها">
                &#128276;
                <span class="badge badge-danger">۵</span>
            </button>
            <div class="notification-dropdown" id="notificationDropdown">
                <div class="dropdown-header">
                    <span>اعلانها</span>
                    <a href="#" class="mark-all-read">همه را خواندم</a>
                </div>
                <ul class="notification-list">
                    <li class="notification-item unread">
                        <span class="notif-icon">&#128722;</span>
                        <div class="notif-content">
                            <p>سفارش جدید دریافت شد</p>
                            <small>۵ دقیقه پیش</small>
                        </div>
                    </li>
                    <li class="notification-item unread">
                        <span class="notif-icon">&#128100;</span>
                        <div class="notif-content">
                            <p>کاربر جدید ثبت‌نام کرد</p>
                            <small>۱۵ دقیقه پیش</small>
                        </div>
                    </li>
                    <li class="notification-item unread">
                        <span class="notif-icon">&#9888;</span>
                        <div class="notif-content">
                            <p>موجودی محصول کم است</p>
                            <small>۱ ساعت پیش</small>
                        </div>
                    </li>
                    <li class="notification-item">
                        <span class="notif-icon">&#128203;</span>
                        <div class="notif-content">
                            <p>گزارش ماهانه آماده شد</p>
                            <small>دیروز</small>
                        </div>
                    </li>
                    <li class="notification-item">
                        <span class="notif-icon">&#128179;</span>
                        <div class="notif-content">
                            <p>پرداخت موفق انجام شد</p>
                            <small>۲ روز پیش</small>
                        </div>
                    </li>
                </ul>
                <div class="dropdown-footer">
                    <a href="#">مشاهده همه اعلانها</a>
                </div>
            </div>
        </div>

        {{-- منوی کاربر --}}
        <div class="user-menu-wrapper" id="userMenuWrapper">
            <button class="user-menu-btn" id="userMenuBtn">
                <span class="user-avatar">&#128100;</span>
                <span class="user-name">مدیر سیستم</span>
                <span class="dropdown-arrow">&#9660;</span>
            </button>
            <div class="user-dropdown" id="userDropdown">
                <div class="user-dropdown-header">
                    <span class="user-avatar-large">&#128100;</span>
                    <div>
                        <strong>مدیر سیستم</strong>
                        <small>admin@example.com</small>
                    </div>
                </div>
                <ul class="user-dropdown-menu">
                    <li>
                        <a href="#">
                            <span>&#128100;</span> پروفایل
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>&#9881;</span> تنظیمات حساب
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#" class="logout-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span>&#128682;</span> خروج از سیستم
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</header>
