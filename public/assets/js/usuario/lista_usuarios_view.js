//const url = uriProject();

requestGet("usuario", "obtener_usuarios")
  .then((response) => {
    //console.log(response);
    const $tbody = document.getElementById("lista-usuarios"),
      fragment = document.createDocumentFragment();

    if (response.length > 0) {
      for (const user of response) {
        const $tr = document.createElement("tr");
        user["editar"] = `<a class="btn btn-primary edit" href="#">📝</a>`;
        user["eliminar"] = `<a class="btn btn-danger delete" href="#">⛔</a>`;
        for (const key in user) {
          const $td = document.createElement("td");
          if (key === "editar" || key === "eliminar") $td.innerHTML = user[key];
          else $td.appendChild(document.createTextNode(user[key]));
          $tr.appendChild($td);
        }

        const $btn_edit = $tr.querySelector(".edit"),
          $btn_delete = $tr.querySelector(".delete");

        $btn_edit.addEventListener("click", (e) => {
          getView("usuario", "editar_usuario", () => {
            insertScript(`${url}/assets/js/usuario/editar_usuario.view.js`);
          });

          delete user["editar"];
          delete user["eliminar"];

          let user_serialized = JSON.stringify(user);
          localStorage.setItem("user", user_serialized);
        });

        $btn_delete.addEventListener("click", (e) => {
          requestDelete("usuario", "eliminar_usuario", {
            id: user["id_usuario"],
          })
            .then((res) => {
              console.log("Eliminado con exito");
              console.log(res);
              getView("usuario", "lista_usuarios", () => {
                insertScript(`${url}/assets/js/usuario/lista_usuarios_view.js`);
              });
            })
            .catch((err) => {
              console.log("error: " + err);
            });
        });

        fragment.appendChild($tr);
      }
      $tbody.appendChild(fragment);
    }
  })
  .catch((error) => {
    console.log("Error: " + error);
  });
