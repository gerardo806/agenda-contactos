//const url = uriProject();

requestGet("usuario", "obtener_usuarios")
    .then((response) => {
        console.log(response);
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
                
                $btn_edit.addEventListener("click", (e) => {console.log("edit")});
                $btn_delete.addEventListener("click", (e) => {console.log("delete")});

                fragment.appendChild($tr);
            }
            $tbody.appendChild(fragment);
        }
    })
    .catch((error) => {
        console.log("Error: " + error);
    })