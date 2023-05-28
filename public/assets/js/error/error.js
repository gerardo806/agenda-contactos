(() => {
    const $main = document.getElementById("app");
    async function getData(){
        try {
            const response = await axios.get("http://localhost/agenda-contactos-php-mysql/public/error/error404");
            $main.innerHTML = response.data;
        } catch (error) {
            const msg = error.response.statusText || "Ocurrio un problema";
            console.log(msg);
            console.log(error.response.status);
        }
    }

    getData();
})();