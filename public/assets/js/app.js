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

(() => {
    const $main = document.getElementById("app");
    async function getData(){
        try {
            const response = await axios.get("http://localhost/agenda-contactos-php-mysql/public/pages/home");
            $main.innerHTML = response.data;
        } catch (error) {
            const msg = error.response.statusText || "Ocurrio un problema";
            console.log(msg);
            console.log(error.response.status);
        }
    }

    getData();
})();