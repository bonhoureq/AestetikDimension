function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function popup() {
    if (confirm("Accept cookies in order to enjoy maximum performance and that we can highlight products that may interest you !")) {
        console.log("d")
        setCookie("Aestetik", "1", 60);
    }
}

function checkCookie() {
    let cookie = document.cookie.indexOf("Aestetik")
    return cookie
}

function cookie() {
    let valeur = null
    if (valeur);
    else
        popup();
}

cookie()
