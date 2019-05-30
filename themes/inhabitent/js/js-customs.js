jQuery(document).ready(function ($) {

    // Code goes here

    $(".fa-search").toggle(function () {
        $(`.search-field`).animate('display', 'block');
    }, function () {
        $(`.search-field`).animate('display', 'none');
    });

});
