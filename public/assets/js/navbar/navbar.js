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
    $exit_session = document.getElementById("exit-session"),
    url = uriProject();

//****************Navbar*******************

$inicio_nav.addEventListener("click", (e) => {
    getView("pages", "home", () => {});
});

//---------------------------------------------------------------

$inicio.addEventListener("click", (e) => {
    getView("pages", "home", () => {});
});

$contacto_nav.addEventListener("click", (e) => {
    getView("contact", "nuevo_contacto", () => {
        insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/contact/nuevo_contacto.view.js`);
    });
});

//***********CONTACTOS****************
$nuevo_contacto.addEventListener("click", (e) => {
    getView("contact", "nuevo_contacto", () => {
        insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/contact/nuevo_contacto.view.js`);
    });
});

$contactos.addEventListener("click", (e) => {
    getView("contact", "lista_contactos", () => {
        //
    });
});

//**********USUARIOS****************
$nuevo_usuario.addEventListener("click", (e) => {
    getView("usuario", "nuevo_usuario", () => {
        insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/nuevo_usuario.view.js`);
    });
});

$usuarios.addEventListener("click", (e) => {
    getView("usuario", "lista_usuarios", () => {
        insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`);
    });
});

//**********ROL****************
$nuevo_rol.addEventListener("click", (e) => {
    getView("usuario", "nuevo_rol", () => {
        //insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`);
    });
});

$config_rol.addEventListener("click", (e) => {
    //
});

$roles.addEventListener("click", (e) => {
    getView("usuario", "lista_roles", () => {
        //insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`);
    });
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

//******************* PERFIL ************************
$exit_session.addEventListener("click", (e) => {
    requestExit();
    location.href = "http://localhost/agenda-contactos-php-mysql/public/usuario/login";
});

//console.log(location.href);