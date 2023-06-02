//Enlaces
const $inicio = document.getElementById("inicio"),
    $nuevo_contacto = document.getElementById("nuevo-contacto"),
    $contactos = document.getElementById("contactos"),
    $nuevo_usuario = document.getElementById("nuevo-usuario"),
    $usuarios = document.getElementById("usuarios"),
    $nuevo_rol = document.getElementById("nuevo-rol"),
    $config_rol = document.getElementById("config-rol"),
    $roles = document.getElementById("roles"),
    $config_permisos = document.getElementById("config-permisos"),
    $permisos = document.getElementById("permisos"),
    $nuevo_depto = document.getElementById("nuevo-depto"),
    $deptos = document.getElementById("deptos"),
    $nuevo_municipio = document.getElementById("nuevo-municipio"),
    $municipios = document.getElementById("municipios"),
    $inicio_nav = document.getElementById("inicio-nav"),
    $contacto_nav = document.getElementById("contacto-nav"),
    url = uriProject();

//****************Navbar*******************

$inicio_nav.addEventListener("click", (e) => {
    getView("pages", "home");
});

//---------------------------------------------------------------

$inicio.addEventListener("click", (e) => {
    getView("pages", "home");
});

$contacto_nav.addEventListener("click", (e) => {
    getView("contact", "nuevo_contacto");
});

//***********CONTACTOS****************
$nuevo_contacto.addEventListener("click", (e) => {
    getView("contact", "nuevo_contacto");
});

$contactos.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en contactos...");
});

//**********USUARIOS****************
$nuevo_usuario.addEventListener("click", (e) => {
    getView("usuario", "nuevo_usuario", () => {
        insertScript(`${url}assets/js/usuario/nuevo_usuario.view.js`);
    });
});

$usuarios.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en usuarios...");
});

//**********ROL****************
$nuevo_rol.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en nuevo-rol...");
});

$config_rol.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en config-rol...");
});

$roles.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en roles...");
});

//**********PERMISOS****************
$config_permisos.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en config-permiso...");
});

$permisos.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en permisos...");
});

//**********DEPARTAMENTOS****************
$nuevo_depto.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en nuevo-depto...");
});

$deptos.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en departamentos...");
});

//**********MUNICIPIOS****************
$nuevo_municipio.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en nuevo-municipio...");
});

$municipios.addEventListener("click", (e) => {
    //e.preventDefault();
    console.log("click en municipios...");
});

//console.log(location.href);