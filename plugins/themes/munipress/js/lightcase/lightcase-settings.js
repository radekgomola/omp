jQuery(document).ready(function ($) {
    $('a[data-rel^="lightcase:cover"]').lightcase({
        type: 'image'
    });
    $('a[data-rel^="lightcase:profile"]').lightcase({
        width: 1000,
        maxWidth: 1000
    });
    $('a[data-rel^="lightcase:flipbook"]').lightcase({
        type: 'iframe',
        width: 1000,
        maxWidth: 1000
    });
});