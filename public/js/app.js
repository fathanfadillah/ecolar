// js
// require('./bootstrap');
$(document).ready(function () {
    $(".nav-link").hover(function () {
        $(this).css("color", "blue");
    },
        function () {
            $(this).css("color", "orange");
        });
});