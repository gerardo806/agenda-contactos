function getView(controller, method) {
    const $main = document.getElementById("app");
    (() => {
        async function getData(){
            try {
                const response = await axios.get("http://localhost/agenda-contactos-php-mysql/public/"+controller+"/"+method);
                $main.innerHTML = response.data;
            } catch (error) {
                const msg = error.response.statusText || "Ocurrio un problema";
                console.log(msg);
                console.log(error.response.status);
            }
        }
    
        getData();
    })();
    return $main;
}

function uriProject(){
    let url = location.href;
    url = url.substring(0, url.length - 2);
    return url;
}

function insertScript(url){
    const $div_script = document.getElementById("script");
    $div_script.innerHTML = "";
    const $script = document.createElement("script");
    $script.src = url;
    $script.type = "text/javascript";
    $div_script.appendChild($script);
}