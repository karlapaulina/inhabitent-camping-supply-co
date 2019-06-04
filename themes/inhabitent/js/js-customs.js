jQuery(document).ready(function ($) {

    $('.fa-search').click(function () {
        $('.search-field').slideToggle('slow');
    });

    $('body.page-id-59 header.site-header').addClass('reverse-header');
    $('body.page-id-59 ul.nav-menu li a').addClass('reverse-links');
    $('body.page-id-59 article.new-nav-menu form.search-form .fa-search').addClass('reverse-icon');
    $('body.page-id-59 article.new-nav-menu input.search-field').addClass('reverse-field');


    $('body.page-id-29 header.site-header').addClass('reverse-header');
    $('body.page-id-29 ul.nav-menu li a').addClass('reverse-links');
    $('body.page-id-29 article.new-nav-menu form.search-form  .fa-search').addClass('reverse-icon');
    $('body.page-id-29 article.new-nav-menu input.search-field').addClass('reverse-field');


    $(window).bind('scroll', function () {
        let navHeight = $(window).height();

        if ($(window).scrollTop() > navHeight) {

            $('body.page-id-59 header.site-header').removeClass('reverse-header');
            $('body.page-id-59 ul.nav-menu li a').removeClass('reverse-links');
            $('body.page-id-59 article.new-nav-menu form.search-form .fa-search').removeClass('reverse-icon');
            $('body.page-id-59 article.new-nav-menu input.search-field').removeClass('reverse-field');

            $('body.page-id-29 header.site-header').removeClass('reverse-header');
            $('body.page-id-29 ul.nav-menu li a').removeClass('reverse-links');
            $('body.page-id-29 article.new-nav-menu form.search-form .fa-search').removeClass('reverse-icon');
            $('body.page-id-29 article.new-nav-menu input.search-field').removeClass('reverse-field');
        }
        else {

            $('body.page-id-59 header.site-header').addClass('reverse-header');
            $('body.page-id-59 ul.nav-menu li a').addClass('reverse-links');
            $('body.page-id-59 article.new-nav-menu form.search-form .fa-search').addClass('reverse-icon');
            $('body.page-id-59 article.new-nav-menu input.search-field').addClass('reverse-field');

            $('body.page-id-29 header.site-header').addClass('reverse-header');
            $('body.page-id-29 ul.nav-menu li a').addClass('reverse-links');
            $('body.page-id-29 article.new-nav-menu form.search-form  .fa-search').addClass('reverse-icon');
            $('body.page-id-29 article.new-nav-menu input.search-field').addClass('reverse-field');
        }
    });

});
