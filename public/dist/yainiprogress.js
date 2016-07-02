// jQuery like selection of elements.
"use strict";

window.$ = document.querySelectorAll.bind(document);

// Changes for  Firefox
if (navigator.userAgent.match(/firefox/i)) {
    // Unicode font sizes
    var ffBtn = "font-weight: normal; font-size: 2em; margin-left: 0.3em;";
    $("#restart-symbol")[0].setAttribute("style", ffBtn);

    var ffwait = "line-height: 1em; font-size: 4em;";
    $(".waiting")[0].setAttribute("style", ffwait);
}
