function expandMobileMenu() {
    var menu = document.getElementById("menu");
    var slope = document.getElementById("header-slope");
    if (menu.classList.contains("expanded")) {
        menu.classList.remove("expanded");
        slope.classList.remove("expanded");
    } else {
        menu.classList.add("expanded");
        slope.classList.add("expanded");
    }
}

window.onhashchange = function() {
    var menu = document.getElementById("menu");
    var slope = document.getElementById("header-slope");
    if (menu.classList.contains("expanded")) {
        menu.classList.remove("expanded");
        slope.classList.remove("expanded");
    }
}
