jQuery(document).ready(function ($) {
    $('a[data-rel^="lightcase:cover"]').lightcase({
        type: 'image',
        maxWidth: 1000,
        maxHeight: 1000
    });
    $('a[data-rel^="lightcase:profile"]').lightcase({
        width: 1000,
        maxWidth: 1000
    });
    $('a[data-rel^="lightcase:flipbook"]').lightcase({
        maxHeight: 1000,
        maxWidth: 1000,
        type: 'iframe'
    });
});