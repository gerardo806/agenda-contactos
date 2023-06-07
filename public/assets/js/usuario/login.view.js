const $user_field = document.getElementById('user'),
    $clave_field = document.getElementById("clave-user"),
    $btn_login = document.getElementById("btn-login");

$btn_login.addEventListener("click", (e) => {
    if ($user_field.value === "") alertWarning("Debe ingresar su nombre de usuario");
    else if($clave_field.value === "") alertWarning("Debe ingresar su contraseña");
    else if(!expRegUser($user_field.value)) alertWarning("Ingrese un usuario válido");
    else{
        const credenciales = {
            usuario: $user_field.value,
            clave: $clave_field.value
        };
        requestLogin(credenciales)
            .then((res) =>{
                if (res[0] !== 0) {
                    console.log(res);
                    location.href="http://localhost/agenda-contactos-php-mysql/public/pages/index";
                }else{
                    alertWarning("Las credenciales son incorrectas o el usuario no esta registrado");
                }
            })
            .catch((err) =>{
                console.log(err);
            })
    }
});