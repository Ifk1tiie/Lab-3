<main class="container my-5 flex-grow-1">

    <section class="row justify-content-center">

        <div class="col-md-7 col-lg-6">

            <div class="card shadow">

                <div class="card-body p-4">

                    <h2 class="text-center mb-4">
                        Formulario de Registro de Aspirantes
                    </h2>

                    <form action="procesar.php"
                          method="POST"
                          enctype="multipart/form-data">

                        <!-- Nombre -->
                        <div class="mb-3">
                            <label for="nombre" class="form-label">
                                Nombre (Requerido):
                            </label>

                            <input type="text"
                                   class="form-control"
                                   id="nombre"
                                   name="nombre"
                                   placeholder="Ingrese su nombre"
                                   required>
                        </div>

                        <!-- Apellido -->
                        <div class="mb-3">
                            <label for="apellido" class="form-label">
                                Apellido (Requerido):
                            </label>

                            <input type="text"
                                   class="form-control"
                                   id="apellido"
                                   name="apellido"
                                   placeholder="Ingrese su apellido"
                                   required>
                        </div>

                        <!-- Identificación -->
                        <div class="mb-3">
                            <label for="identificacion" class="form-label">
                                Identificación (Requerido):
                            </label>

                            <input type="text"
                                   class="form-control"
                                   id="identificacion"
                                   name="identificacion"
                                   placeholder="Ejemplo: 8-123-456"
                                   required>
                        </div>

                        <!-- Fecha de nacimiento -->
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">
                                Fecha de Nacimiento (Requerido):
                            </label>

                            <input type="date"
                                   class="form-control"
                                   id="fecha_nacimiento"
                                   name="fecha_nacimiento"
                                   required>
                        </div>

                        <!-- Sexo -->
                        <div class="mb-3">

                            <label class="form-label">
                                Sexo (Requerido):
                            </label>

                            <div class="row">

                                <div class="col-6">
                                    <input type="radio"
                                           class="btn-check"
                                           name="sexo"
                                           id="hombre"
                                           value="Hombre"
                                           required>

                                    <label class="btn btn-outline-primary w-100"
                                           for="hombre">
                                        Hombre
                                    </label>
                                </div>

                                <div class="col-6">
                                    <input type="radio"
                                           class="btn-check"
                                           name="sexo"
                                           id="mujer"
                                           value="Mujer">

                                    <label class="btn btn-outline-primary w-100"
                                           for="mujer">
                                        Mujer
                                    </label>
                                </div>

                            </div>

                        </div>

                        <!-- Fotografía -->
                        <div class="mb-4">

                            <label for="foto" class="form-label">
                                Fotografía del Aspirante (jpg, jpeg, png, gif):
                            </label>

                            <input type="file"
                                   class="form-control"
                                   id="foto"
                                   name="foto"
                                   accept=".jpg,.jpeg,.png,.gif"
                                   required>

                        </div>

                        <!-- Botón -->
                        <button type="submit"
                                class="btn btn-primary w-100">
                            Registrar Aspirante
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </section>

</main>