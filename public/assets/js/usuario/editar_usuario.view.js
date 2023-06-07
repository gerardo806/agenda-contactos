//user value
var user_local = localStorage.getItem("user");
localStorage.clear();
user_local = JSON.parse(user_local);

//fields form
var $btn_update = document.getElementById("btn_update");

var $nombreUsuario = document.getElementById("nombreUsuario"),
  $nombreCompleto = document.getElementById("nombreCompleto"),
  $correo = document.getElementById("correo"),
  $clave = document.getElementById("clave"),
  $confirmarClave = document.getElementById("confirmarClave"),
  $id_usuario = document.getElementById("id_usuario"),
  $enlace_tabla = document.getElementById("table-users");

var warningFieldEmpty = (field) =>
  alertWarning(`El campo ${field} no puede estar vacio.`);
var warningFieldInvalid = (field) =>
  alertWarning(`El campo ${field} tiene caracteres invalidos.`);

$nombreUsuario.value = user_local["nombreUsuario"];
$nombreCompleto.value = user_local["nombreCompleto"];
$correo.value = user_local["correo"];
$id_usuario.value = user_local["id_usuario"];

$btn_update.addEventListener("click", (e) => {
  if ($nombreUsuario.value === "") warningFieldEmpty("Nombre Usuario");
  else if ($nombreCompleto.value === "") warningFieldEmpty("Nombre Completo");
  else if ($correo.value === "") warningFieldEmpty("Correo");
  else {
    if ($clave.value !== "" || $confirmarClave.value !== "") {
      if ($clave.value !== $confirmarClave.value) {
        alertWarning("Las claves no son iguales");
        return;
      }

      if ($clave.value.length < 4) {
        alertWarning("La clave debe tener 4 caracteres como minimo");
        return;
      }
    }

    if (!expRegUser($nombreUsuario.value))
      warningFieldInvalid("Nombre Usuario");
    else if (!expRegName($nombreCompleto.value))
      warningFieldInvalid("Nombre Completo");
    else {
      const form = {
        id_usuario: $id_usuario.value,
        nombreUsuario: $nombreUsuario.value,
        nombreCompleto: $nombreCompleto.value,
        correo: $correo.value,
        clave: $clave.value,
      };
      //console.log(form);
      const res = requestPost("usuario", "actualizar_usuario", form);
      res.then((data) => console.log(data)).catch((err) => console.log(err));
    }
  }
});

$enlace_tabla.addEventListener("click", (e) => {
  getView("usuario", "lista_usuarios", () => {
    insertScript(`${url}assets/js/usuario/lista_usuarios_view.js`);
  });
});
