<div class="mt-4" id="nuevo-usuario">
    <h1 class="text-center">Editar Usuario</h1>
    <div class="col-lg-6 col-md-6 col-sm-12 offset-md-3 offset-lg-3 mt-3">
        <article class="card">
            <header class="card-header bg-dark text-white">
                Completar Campos
            </header>
            <section class="card-body">
                <h4 class="card-title">Formulario de Usuario</h4>
                <form>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label w-100">
                                    Nombre de Usuario
                                    <input name="nombreUsuario" id="nombreUsuario" type="text"
                                        class="form-control mt-2">
                                </label>
                                <div class="form-text">El usuario debe ser único, Ej: sammy23.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label w-100">
                                    Nombre Completo
                                    <input name="nombreCompleto" id="nombreCompleto" type="text"
                                        class="form-control mt-2">
                                </label>
                                <div class="form-text">Un nombre y un apellido.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label w-100">
                                    Correo Electrónico
                                    <input name="correo" id="correo" type="email" class="form-control mt-2">
                                </label>
                                <div class="form-text">El correo es de uso personal.</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label class="form-label w-100">
                                    Clave de Usuario
                                    <input name="clave" id="clave" type="password" class="form-control mt-2">
                                </label>
                                <div class="form-text">La clave debe tener 8.</div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label w-100">
                                    Confirmar Clave
                                    <input name="confirmarClave" id="confirmarClave" type="password"
                                        class="form-control mt-2">
                                </label>
                                <div class="form-text">Las claves deben ser iguales</div>
                            </div>

                            <div class="mb-3">
                            <input name="id_usuario" id="id_usuario" type="hidden"
                                        class="form-control mt-2">
                            </div>
                        </div>
                    </div>
                    <button id="btn_update" type="button" class="btn btn-primary w-100">
                        Actualizar
                    </button>
                </form>
            </section>
            <footer class="card-footer text-muted bg-dark text-light">
                <a class="link-light" href="#" id="table-users">
                    Ver tabla de usuarios
                </a>
            </footer>
        </article>
    </div>
</div>