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

requestGet("contact", "obtener_tipos_contactos").then((res) => {
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
  if ($nombreSimpleContacto.value === "") warningFieldEmpty("Nombre");
  else if ($nombresContacto.value === "") warningFieldEmpty("Nombres");
  else if ($apellidosContactos.value === "") warningFieldEmpty("Apellido");
  else if ($selectTipoContacto.value === "0")
    warningFieldEmpty("Seleccione un tipo de contacto");
  else if ($contactoPersonal.value === "") warningFieldEmpty("Contacto");
  else {
    if (!expRegName($nombreSimpleContacto.value)) warningFieldInvalid("Nombre");
    else if (!expRegName($nombresContacto.value))
      warningFieldInvalid("Nombres");
    else if (!expRegName($apellidosContactos.value))
      warningFieldInvalid("Apellidos");
    else {
      const form = {
        nombreSimpleContacto: $nombreSimpleContacto.value,
        nombresContacto: $nombresContacto.value,
        apellidosContactos: $apellidosContactos.value,
        selectTipoContacto: $selectTipoContacto.value,
        contactoPersonal: $contactoPersonal.value
      };
      //console.log(form);
      const res = requestPost("usuario", "guardar_usuario", form);
      res
        .then((data) => {
          console.log(data);
          if (data["msg"] === 1) {
            getView("usuario", "lista_usuarios", () => {
              insertScript(
                `http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`
              );
            });
          } else {
            alertWarning(
              "No se pudo registrar el usuario, puede que el correo o el usuario ya esten registrados en otra cuenta"
            );
          }
        })
        .catch((err) => console.log(err));
    }
  }
});

$enlace_tabla_contacto.addEventListener("click", (e) => {
  getView("usuario", "lista_usuarios", () => {
    insertScript(
      `http://localhost/agenda-contactos-php-mysql/public/assets/js/usuario/lista_usuarios_view.js`
    );
  });
});

console.log("script nuevo contacto...");
