/*! popovers-users.js | Friendkit | © Css Ninja. 2019-2020 */
"use strict";
function getUserPopovers() {
    $("*[data-user-popover]").each(function () {
        var n = $(this),
            e = $(this).attr("data-user-popover"),
            s = feather.icons["message-circle"].toSvg(),
            a = feather.icons["more-horizontal"].toSvg(),
            o = feather.icons["map-pin"].toSvg(),
            i = feather.icons.users.toSvg(),
            r = feather.icons.bookmark.toSvg();
      
    });
}
$(document).ready(function () {
    getUserPopovers();
});
