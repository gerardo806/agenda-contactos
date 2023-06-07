function getView(controller, method, script) {
    const $main = document.getElementById("app");
    (() => {
        async function getData(){
            try {
                const response = await axios.get("http://localhost/agenda-contactos-php-mysql/public/"+controller+"/"+method);
                $main.innerHTML = response.data;
                script();
            } catch (error) {
                const msg = error.response.statusText || "Ocurrio un problema";
                console.log(msg);
                console.log(error.response.status);
            }
        }
    
        getData();
        //script();
    })();
    return $main;
}

function requestGet(controller, method) {
    return (() => {
        async function getData(){
            try {
                const response = await axios.get("http://localhost/agenda-contactos-php-mysql/public/"+controller+"/"+method);
                return response.data;
            } catch (error) {
                const msg = error.response.statusText || "Ocurrio un problema";
                console.log(msg);
                console.log(error.response.status);
                return msg;
            }
        }
    
        return getData();
    })();
}

function requestPost(controller, method, data) {
     return (() => {
        async function getData(){
            try {
                const response = await axios.post(
                    "http://localhost/agenda-contactos-php-mysql/public/"+controller+"/"+method,
                    data    
                );
                 //console.log(response.data);
                 return response.data;
            } catch (error) {
                const msg = error.response.statusText || "Ocurrio un problema";
                console.log(msg);
                console.log(error.response.status);
                return msg;
            }
        }
        return getData();
    })();
}

function requestDelete(controller, method, id) {
    return (() => {
       async function getData(){
           try {
               const response = await axios.post(
                   "http://localhost/agenda-contactos-php-mysql/public/"+controller+"/"+method,
                   id 
               );
                //console.log(response.data);
                return response.data;
           } catch (error) {
               const msg = error.response.statusText || "Ocurrio un problema";
               console.log(msg);
               console.log(error.response.status);
               return msg;
           }
       }
       return getData();
   })();
}

function uriProject(){
    let url = location.href;
    url = url.split("#");
    url = url[0];
    return url;
}

function insertScript(url){
    const $div_script = document.getElementById("script");
    $div_script.innerHTML = "";
    const $script = document.createElement("script");
    $script.src = url;
    $script.type = "application/javascript";
    $div_script.appendChild($script);
}

function getDate(){
    let date = new Date();
    date = date.toLocaleDateString();
    return date;
}

function alertWarning(msg){
    const date = getDate(),
        $alert = document.getElementById("liveToast"),
        toast = new bootstrap.Toast($alert);
    
    const $date_content = document.getElementById("date-content");
    $date_content.innerHTML = "";
    $date_content.insertAdjacentText("afterbegin", date);

    const $msg_content = document.getElementById("msg-content");
    $msg_content.innerHTML = "";
    $msg_content.insertAdjacentText("afterbegin", msg);
    toast.show();
}

function expRegName(txt){
    const exp_reg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/ig
    return exp_reg.test(txt);
}

function expRegUser(txt){
    const exp_reg = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ]*([0-9]*)$/ig
    return exp_reg.test(txt);
}