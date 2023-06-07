const $btn_update = document.getElementById("btn_update");

const $nombreUsuario = document.getElementById("nombreUsuario"),
  $nombreCompleto = document.getElementById("nombreCompleto"),
  $correo = document.getElementById("correo"),
  $clave = document.getElementById("clave"),
  $confirmarClave = document.getElementById("confirmarClave"),
  $enlace_tabla = document.getElementById("table-users");

const warningFieldEmpty = (field) =>
  alertWarning(`El campo ${field} no puede estar vacio.`);
const warningFieldInvalid = (field) =>
  alertWarning(`El campo ${field} tiene caracteres invalidos.`);

$btn_update.addEventListener("click", (e) => {
  if ($nombreUsuario.value === "") warningFieldEmpty("Nombre Usuario");
  else if ($nombreCompleto.value === "") warningFieldEmpty("Nombre Completo");
  else if ($correo.value === "") warningFieldEmpty("Correo");
  else if ($clave.value === "") warningFieldEmpty("Clave");
  else if ($confirmarClave.value === "") warningFieldEmpty("Clave");
  else {
    if (!expRegUser($nombreUsuario.value))
      warningFieldInvalid("Nombre Usuario");
    else if (!expRegName($nombreCompleto.value))
      warningFieldInvalid("Nombre Completo");
    else if ($clave.value.length < 4)
      alertWarning("La clave tener 4 caracteres como minimo");
    else if ($clave.value !== $confirmarClave.value)
      alertWarning("Las claves no son iguales");
    else {
      const form = {
        nombreUsuario: $nombreUsuario.value,
        nombreCompleto: $nombreCompleto.value,
        correo: $correo.value,
        clave: $clave.value,
      };
      //console.log(form);
      const res = requestPost("usuario", "guardar_usuario", form);
      res.then((data) => console.log(data)).catch((err) => console.log(err));
    }
  }
});

$enlace_tabla.addEventListener("click", (e) => {
  getView("usuario", "lista_usuarios", () => {
    insertScript(`${url}assets/js/usuario/lista_usuarios_view.js`);
  })
});