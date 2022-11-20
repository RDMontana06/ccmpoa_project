/*! popovers-pages.js | Friendkit | © Css Ninja. 2019-2020 */
"use strict";

function getPagesPopovers() {
    $("*[data-page-popover]").each((function() {
        var a = $(this),
            e = $(this).attr("data-page-popover"),
            n = feather.icons.mail.toSvg(),
            o = feather.icons["more-horizontal"].toSvg(),
            s = (feather.icons["map-pin"].toSvg(), feather.icons.users.toSvg()),
            i = feather.icons.tag.toSvg(),
            t = feather.icons.bookmark.toSvg();
       
    }))
}
$(document).ready((function() {
    getPagesPopovers()
}));