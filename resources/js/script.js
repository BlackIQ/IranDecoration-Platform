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