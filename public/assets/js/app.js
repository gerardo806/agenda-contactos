//const $app = document.getElementById("app");

//AJAX
/* const xhr = new XMLHttpRequest();

xhr.addEventListener("readystatechange", function() {
    if(this.readyState != 4) return;
    if (this.status >= 200 && this.status < 300) {
        $app.innerHTML = this.responseText;
    }
});

xhr.open("GET", "http://localhost/agenda-contactos-php-mysql/public/pages/home");
xhr.send(); */

getView("pages", "home");