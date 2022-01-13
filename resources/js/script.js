tabs = ['.overview', '.ads', '.requests', '.settings'];

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
        $('.requests').removeClass('none');
        $('.requests').addClass('block');
    }
});

$('#settings-link').click(function () {
    if ($('.settings').hasClass('none')) {
        for (const tabsKey in tabs) {
            if ($(tabs[tabsKey]).hasClass('block')) {
                $(tabs[tabsKey]).removeClass('block');
                $(tabs[tabsKey]).addClass('none');
            }
        }
        $('.settings').removeClass('none');
        $('.settings').addClass('block');
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
        $('.overview').removeClass('none');
        $('.overview').addClass('block');
    }
});

function changeBox(show, hide) {
    document.getElementById(show).style.display = 'block';
    document.getElementById(hide).style.display = 'none';
    return false;
}

function changeUrl(url) {
    window.location.href = url;
    return false;
}

function showAlert(text) {
    window.alert(text);
}