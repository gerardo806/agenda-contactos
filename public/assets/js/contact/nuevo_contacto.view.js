var $btn_save_contacto = document.getElementById("btn_save_contacto");

var $nombreSimpleContacto = document.getElementById("nombreSimpleContacto"),
  $nombresContacto = document.getElementById("nombresContacto"),
  $apellidosContactos = document.getElementById("apellidosContactos"),
  $selectTipoContacto = document.getElementById("selectTipoContacto"),
  $contactoPersonal = document.getElementById("contactoPersonal"),
  $enlace_tabla_contacto = document.getElementById("tabla-contacto");

var warningFieldEmpty = (field) =>
  alertWarning(`El campo ${field} no puede estar vacio.`);
var warningFieldInvalid = (field) =>
  alertWarning(`El campo ${field} tiene caracteres invalidos.`);

  requestGet("contact", "obtener_tipos_contactos")
  .then((res) => {
    fragment = document.createDocumentFragment();
    for (const contact of res) {
      $opt = document.createElement("option");
      $opt.setAttribute("value", contact["id_tipo_contacto"]);
      $opt.innerHTML = contact["nombre"];
      fragment.appendChild($opt);
    }
    $selectTipoContacto.appendChild(fragment);
  });


$btn_save_contacto.addEventListener("click", (e) => {
  if ($nombreSimpleContacto.value === "") warningFieldEmpty("Nombre Usuario");
  else if ($nombresContacto.value === "") warningFieldEmpty("Nombre Completo");
  else if ($apellidosContactos.value === "") warningFieldEmpty("Correo");
  else if ($selectTipoContacto.value === "") warningFieldEmpty("Clave");
  else if ($contactoPersonal.value === "") warningFieldEmpty("Clave");
  else {
    if (!expRegUser($nombreSimpleContacto.value))
      warningFieldInvalid("Nombre Usuario");
    else if (!expRegName($nombresContacto.value))
      warningFieldInvalid("Nombre Completo");
    else if ($selectTipoContacto.value.length < 4)
      alertWarning("La clave tener 4 caracteres como minimo");
    else if ($selectTipoContacto.value !== $contactoPersonal.value)
      alertWarning("Las claves no son iguales");
    else {
      const form = {
        nombreUsuario: $nombreSimpleContacto.value,
        nombreCompleto: $nombresContacto.value,
        correo: $apellidosContactos.value,
        clave: $selectTipoContacto.value,
      };
      //console.log(form);
      const res = requestPost("usuario", "guardar_usuario", form);
      res
        .then((data) => {
          console.log(data);
          if (data["msg"] === 1) {
            getView("usuario", "lista_usuarios", () => {
              insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`);
            });
          }else{
            alertWarning("No se pudo registrar el usuario, puede que el correo o el usuario ya esten registrados en otra cuenta");
          }
        })
        .catch((err) => console.log(err));
    }
  }
});

$enlace_tabla_contacto.addEventListener("click", (e) => {
  getView("usuario", "lista_usuarios", () => {
    insertScript(`http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`);
  });
});

console.log("script nuevo contacto...");