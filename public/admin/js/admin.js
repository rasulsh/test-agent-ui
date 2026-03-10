/**
 * اسکریپت jQuery برای پنل مدیریت
 * شامل: تاگل سایدبار، زیرمنوها، دراپ‌داون‌ها
 */
$(function () {

    // نقطه شکست موبایل (باید با media query در CSS هماهنگ باشد)
    var MOBILE_BREAKPOINT = 768;

    /* --------------------------------------------------------
       تاگل سایدبار (دسکتاپ)
    -------------------------------------------------------- */
    $('#sidebarToggle').on('click', function () {
        var isMobile = $(window).width() <= MOBILE_BREAKPOINT;
        if (isMobile) {
            // موبایل: باز و بسته کردن روی صفحه
            $('#adminSidebar').toggleClass('mobile-open');
            $('#sidebarOverlay').toggleClass('show');
        } else {
            // دسکتاپ: جمع و باز کردن سایدبار
            $('body').toggleClass('sidebar-collapsed');
        }
    });

    /* بستن سایدبار با کلیک روی پوشش تاریک */
    $('#sidebarOverlay').on('click', function () {
        $('#adminSidebar').removeClass('mobile-open');
        $('#sidebarOverlay').removeClass('show');
    });

    /* --------------------------------------------------------
       زیرمنوها
    -------------------------------------------------------- */
    $('.submenu-toggle').on('click', function (e) {
        e.preventDefault();
        var $navItem = $(this).closest('.nav-item');
        var $submenu = $navItem.find('.submenu');
        var isOpen   = $navItem.hasClass('open');

        // بستن همه زیرمنوهای دیگر
        $('.nav-item.has-submenu').not($navItem).each(function () {
            $(this).removeClass('open');
            $(this).find('.submenu').css('max-height', '0');
        });

        if (isOpen) {
            $navItem.removeClass('open');
            $submenu.css('max-height', '0');
        } else {
            $navItem.addClass('open');
            $submenu.css('max-height', $submenu[0].scrollHeight + 'px');
        }
    });

    /* باز کردن زیرمنوی فعال هنگام بارگذاری صفحه */
    $('.nav-item.has-submenu.open').each(function () {
        var $submenu = $(this).find('.submenu');
        $submenu.css('max-height', $submenu[0].scrollHeight + 'px');
    });

    /* --------------------------------------------------------
       دراپ‌داون اعلانها
    -------------------------------------------------------- */
    $('#notificationBtn').on('click', function (e) {
        e.stopPropagation();
        $('#notificationDropdown').toggleClass('show');
        // بستن منوی کاربر اگر باز باشد
        $('#userDropdown').removeClass('show');
    });

    /* --------------------------------------------------------
       دراپ‌داون منوی کاربر
    -------------------------------------------------------- */
    $('#userMenuBtn').on('click', function (e) {
        e.stopPropagation();
        $('#userDropdown').toggleClass('show');
        // بستن اعلانها اگر باز باشد
        $('#notificationDropdown').removeClass('show');
    });

    /* بستن دراپ‌داون‌ها با کلیک خارج */
    $(document).on('click', function () {
        $('#notificationDropdown').removeClass('show');
        $('#userDropdown').removeClass('show');
    });

    /* جلوگیری از بسته شدن با کلیک داخل دراپ‌داون */
    $('#notificationDropdown, #userDropdown').on('click', function (e) {
        e.stopPropagation();
    });

    /* --------------------------------------------------------
       علامت‌گذاری همه اعلانها به‌عنوان خوانده‌شده
    -------------------------------------------------------- */
    $('.mark-all-read').on('click', function (e) {
        e.preventDefault();
        $('.notification-item').removeClass('unread');
        $('.notification-btn .badge').fadeOut(300, function () {
            $(this).remove();
        });
    });

    /* --------------------------------------------------------
       سازگاری با تغییر اندازه پنجره
    -------------------------------------------------------- */
    $(window).on('resize', function () {
        var isMobile = $(window).width() <= MOBILE_BREAKPOINT;
        if (!isMobile) {
            // در دسکتاپ کلاس موبایل را حذف کن
            $('#adminSidebar').removeClass('mobile-open');
            $('#sidebarOverlay').removeClass('show');
        } else {
            // در موبایل حالت collapsed را حذف کن
            $('body').removeClass('sidebar-collapsed');
        }
    });

});
