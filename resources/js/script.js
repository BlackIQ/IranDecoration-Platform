$(".close-box").click(function () {
    $(".welcome").hide(500);
    console.log('tap');
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