lStorage = window.localStorage;

tabs = ['.overview', '.ads', '.requests',];
navs = ['#overview-link', '#ads-link', '#requests-link',];

function changeBox(show, hide) {
    document.getElementById(show).style.display = 'block';
    document.getElementById(hide).style.display = 'none';
    return false;
}

function changeUrl(url) {
    window.location.href = url;
    return false;
}

function changePanel(page, id) {
    for (const tabsKey in tabs) {
        if ($(tabs[tabsKey]) !== page) {
            if ($(tabs[tabsKey]).hasClass('block')) {
                $(tabs[tabsKey]).removeClass('block');
                $(tabs[tabsKey]).addClass('none');
            }
        }
    }
    for (const navKey in navs) {
        if ($(navs[navKey]) !== id) {
            if ($(navs[navKey]).hasClass('active')) {
                $(navs[navKey]).removeClass('active');
                $(navs[navKey]).removeClass('text-main');
                $(navs[navKey]).addClass('deactive');
            }
        }
    }
    $(id).addClass('text-main');
    $(id).addClass('active');
    $(id).removeClass('deactive');
    $(page).addClass('block');
    $(page).removeClass('none');
}

function showAlert(text) {
    window.alert(text);
}

function set(key, value) {
    lStorage.setItem(key, value);
}

function get(key) {
    return lStorage.getItem(key);
}

function del(key) {
    lStorage.removeItem(key);
}

if (get('apply') !== null) {
    changePanel('.requests', '#requests-link');
}

if (get('theme') === 'light') {
    $('.body').addClass('light');
} else if (get('theme') === 'dark') {
    $('.body').addClass('dark');
} else {
    $('.body').addClass('light');
}

if ($('.body').hasClass('light')) {
    $('.theme-changer').addClass('fa-moon');
    $('.theme-changer').css({'color':'black'});
}
else {
    $('.theme-changer').addClass('fa-sun');
    $('.theme-changer').css({'color':'white'});
}

$('.theme-changer').click(function () {
    if ($('.body').hasClass('light')) {
        $('.body').removeClass('light');
        $('.body').addClass('dark');
        $('.theme-changer').removeClass('fa-moon');
        $('.theme-changer').addClass('fa-sun');
        $('.theme-changer').css({'color':'white'});
        set('theme', 'dark');
    }
    else {
        $('.body').removeClass('dark');
        $('.body').addClass('light');
        $('.theme-changer').removeClass('fa-sun');
        $('.theme-changer').addClass('fa-moon');
        $('.theme-changer').css({'color':'black'});
        set('theme', 'light');
    }
});


$(".close-box").click(function () {
    $(".welcome").hide(500);
});

$(".close-error").click(function () {
    $(".error-box").hide();
});

$('.faq .faq-answer').hide();
$('.post .post-footer').hide();

$('.faq-question').click(function () {
    $(this).next('.faq-answer').slideToggle();
});
$('.post-more').click(function () {
    $(this).next('.post-footer').slideToggle();
});

$('#ads-link').click(function () {
    if ($('.ads').hasClass('none')) {
        for (const tabsKey in tabs) {
            if ($(tabs[tabsKey]).hasClass('block')) {
                $(tabs[tabsKey]).removeClass('block');
                $(tabs[tabsKey]).addClass('none');
            }
        }
        for (const navKey in navs) {
            if ($(navs[navKey]).hasClass('active')) {
                $(navs[navKey]).removeClass('active');
                $(navs[navKey]).removeClass('text-main');
                $(navs[navKey]).addClass('deactive');
            }
        }
        $(this).addClass('text-main');
        $(this).addClass('active');
        $(this).removeClass('deactive');
        $('.ads').removeClass('none');
        $('.ads').addClass('block');
    }
});

$('#requests-link').click(function () {
    if ($('.requests').hasClass('none')) {
        for (const tabsKey in tabs) {
            if ($(tabs[tabsKey]).hasClass('block')) {
                $(tabs[tabsKey]).removeClass('block');
                $(tabs[tabsKey]).addClass('none');
            }
        }
        for (const navKey in navs) {
            if ($(navs[navKey]).hasClass('active')) {
                $(navs[navKey]).removeClass('active');
                $(navs[navKey]).removeClass('text-main');
                $(navs[navKey]).addClass('deactive');
            }
        }
        $(this).addClass('text-main');
        $(this).addClass('active');
        $(this).removeClass('deactive');
        $('.requests').removeClass('none');
        $('.requests').addClass('block');
    }
});

$('#overview-link').click(function () {
    if ($('.overview').hasClass('none')) {
        for (const tabsKey in tabs) {
            if ($(tabs[tabsKey]).hasClass('block')) {
                $(tabs[tabsKey]).removeClass('block');
                $(tabs[tabsKey]).addClass('none');
            }
        }
        for (const navKey in navs) {
            if ($(navs[navKey]).hasClass('active')) {
                $(navs[navKey]).removeClass('active');
                $(navs[navKey]).removeClass('text-main');
                $(navs[navKey]).addClass('deactive');
            }
        }
        $(this).addClass('text-main');
        $(this).addClass('active');
        $(this).removeClass('deactive');
        $('.overview').removeClass('none');
        $('.overview').addClass('block');
    }
});