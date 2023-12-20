$(document).ready(function () {
    $('.content').on('click', '.first', function (ev) {
        $(this).toggleClass('animate');
        $('.second').toggleClass('animate');
    }).on('click', '.second', function (ev) {
        $(this).toggleClass('animate');
        $('.first').toggleClass('animate');
    });
});