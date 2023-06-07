<div card="row">
    <div class="mt-4 col-md-4 col-lg-4 offset-md-4 offset-lg-4 col-ms-12" id="nuevo-rol">
        <h1 class="text-center">Nuevo Rol</h1>
        <div class="mt-3">
            <article class="card">
                <header class="card-header bg-dark text-white">
                    Completar Campos
                </header>
                <section class="card-body">
                    <h4 class="card-title">Formulario de Rol</h4>
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Nombre de Usuario
                                        <input name="nombreRol" id="nombreRol" type="text" class="form-control mt-2">
                                    </label>
                                    <div class="form-text">El Rol debe ser único.</div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label w-100">
                                        Descripción
                                        <textarea class="form-control" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                    </label>
                                    <div class="form-text">Una breve descripción del Rol.</div>
                                </div>
                            </div>
                        </div>
                        <button id="btn_save_rol" type="button" class="btn btn-primary w-100">
                            Guardar
                        </button>
                    </form>
                </section>
                <footer class="card-footer text-muted bg-dark text-light">
                    <a class="link-light" href="#" id="table-users">
                        Ver tabla de Roles
                    </a>
                </footer>
            </article>
        </div>
    </div>
</div>