<?php

include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validar que los campos existan y no estén vacíos
    if (
        empty($_POST['nombre']) ||
        empty($_POST['apellido']) ||
        empty($_POST['identificacion']) ||
        empty($_POST['fecha_nacimiento']) ||
        empty($_POST['sexo'])
    ) {
        echo '<div class="container mt-5">
                <div class="alert alert-danger">
                    Todos los campos son obligatorios.
                </div>
              </div>';

        include 'includes/footer.php';
        exit;
    }

    // Limpiar y proteger los datos
    $nombre = htmlspecialchars(
        strip_tags(trim($_POST['nombre']))
    );

    $apellido = htmlspecialchars(
        strip_tags(trim($_POST['apellido']))
    );

    $identificacion = htmlspecialchars(
        strip_tags(trim($_POST['identificacion']))
    );

    $sexo = htmlspecialchars(
        strip_tags(trim($_POST['sexo']))
    );

    $fechaNacimiento = $_POST['fecha_nacimiento'];

    // Normalizar nombre y apellido
    $nombre = ucwords(strtolower($nombre));
    $apellido = ucwords(strtolower($apellido));

    // Identificación en mayúsculas
    $identificacion = strtoupper($identificacion);

    // Calcular edad
    $fechaNacimientoObjeto = new DateTime($fechaNacimiento);
    $fechaActual = new DateTime();

    $edad = $fechaActual->diff($fechaNacimientoObjeto)->y;

    // Validar edad
    if ($edad < 18 || $edad > 70) {

        echo '<div class="container mt-5">
                <div class="alert alert-danger">
                    La edad del aspirante debe estar entre 18 y 70 años.
                </div>
              </div>';

        include 'includes/footer.php';
        exit;
    }

    // Validar fotografía
    if (!isset($_FILES['foto']) || $_FILES['foto']['error'] != 0) {

        echo '<div class="container mt-5">
                <div class="alert alert-danger">
                    Debe seleccionar una fotografía válida.
                </div>
              </div>';

        include 'includes/footer.php';
        exit;
    }

    $nombreFoto = basename($_FILES['foto']['name']);

    $extension = strtolower(
        pathinfo($nombreFoto, PATHINFO_EXTENSION)
    );

    $extensionesPermitidas = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        'webp'
    ];

    if (!in_array($extension, $extensionesPermitidas)) {

        echo '<div class="container mt-5">
                <div class="alert alert-danger">
                    La extensión de la fotografía no está permitida.
                </div>
              </div>';

        include 'includes/footer.php';
        exit;
    }

    // Crear un nombre único para la fotografía
    $nuevoNombreFoto = uniqid('aspirante_') . '.' . $extension;

    $rutaDestino = 'uploaded_files/' . $nuevoNombreFoto;

    // Guardar fotografía
    if (move_uploaded_file(
        $_FILES['foto']['tmp_name'],
        $rutaDestino
    )) {

        ?>

        <main class="container my-5 flex-grow-1">

            <section class="row justify-content-center">

                <div class="col-md-7">

                    <div class="card shadow">

                        <div class="card-body p-4">

                            <div class="alert alert-success">
                                Aspirante registrado correctamente.
                            </div>

                            <h3 class="mb-4">
                                Datos del Aspirante
                            </h3>

                            <p>
                                <strong>Nombre:</strong>
                                <?php echo $nombre; ?>
                            </p>

                            <p>
                                <strong>Apellido:</strong>
                                <?php echo $apellido; ?>
                            </p>

                            <p>
                                <strong>Identificación:</strong>
                                <?php echo $identificacion; ?>
                            </p>

                            <p>
                                <strong>Fecha de nacimiento:</strong>
                                <?php echo $fechaNacimiento; ?>
                            </p>

                            <p>
                                <strong>Edad:</strong>
                                <?php echo $edad; ?> años
                            </p>

                            <p>
                                <strong>Sexo:</strong>
                                <?php echo $sexo; ?>
                            </p>

                            <p>
                                <strong>Fotografía:</strong>
                            </p>

                            <img src="<?php echo $rutaDestino; ?>"
                                 class="img-thumbnail mb-3"
                                 style="max-width: 200px;"
                                 alt="Fotografía del aspirante">

                            <br>

                            <a href="index.php"
                               class="btn btn-primary mt-3">
                                Registrar otro aspirante
                            </a>

                        </div>

                    </div>

                </div>

            </section>

        </main>

        <?php

    } else {

        echo '<div class="container mt-5">
                <div class="alert alert-danger">
                    Ocurrió un error al guardar la fotografía.
                </div>
              </div>';
    }
}

include 'includes/footer.php';

?>