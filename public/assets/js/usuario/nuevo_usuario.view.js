const $btn_save = document.getElementById("btn_save");

const $nombreUsuario = document.getElementById("nombreUsuario"),
    $nombreCompleto = document.getElementById("nombreCompleto"),
    $correo = document.getElementById("correo"),
    $clave = document.getElementById("clave"),
    $confirmarClave = document.getElementById("confirmarClave"),
    $alert = document.getElementById("liveToast"),
    date = getDate();

$btn_save.addEventListener("click", (e) => {
    /* console.log("nombre usuario: ", $nombreUsuario.value);
    console.log("nombre completo: ", $nombreCompleto.value);
    console.log("correo: ", $correo.value);
    console.log("clave: ", $clave.value);
    console.log("confirmar clave: ", $confirmarClave.value); */
    alertWarning("Hola mundo")
});