<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin SENA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        body {
            background-color: #f4f6f5;
            font-family: Arial, sans-serif;
        }

        .navbar-sena {
            background-color: #39a900;
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
            font-size: 24px;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .hero {
            background: linear-gradient(rgba(0,80,0,.65), rgba(0,80,0,.65)),
            url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            height: 420px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
        }

        .hero p {
            font-size: 21px;
        }

        .titulo-seccion {
            color: #39a900;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .info-card {
            border: none;
            border-radius: 12px;
            height: 100%;
        }

        .icono {
            font-size: 40px;
            color: #39a900;
        }

        .carousel-item img {
            height: 420px;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0,0,0,.6);
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-sena">
        <div class="container">

            <a class="navbar-brand" href="/">
                ADMIN SENA
            </a>

            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aprendice.list') }}">
                            Aprendices
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('course.list') }}">
                            Cursos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('area.index') }}">
                            Áreas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('computer.list') }}">
                            Computadores
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('training_center.list') }}">
                            Centros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('teacher.list') }}">
                            Profesores
                        </a>
                    </li>

                    <!-- LOGIN -->
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <button class="btn btn-light text-success fw-bold"
                                data-bs-toggle="modal"
                                data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt me-1"></i>
                            Iniciar sesión
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero">
        <div>
            <h1>Sistema Administrativo SENA</h1>
            <p>Gestión y administración de los recursos de formación</p>
        </div>
    </section>


    <!-- CARRUSEL -->
    <section class="container mt-5">

        <h2 class="text-center titulo-seccion">
            Nuestros Aprendices
        </h2>

        <div id="carouselAprendices"
             class="carousel slide"
             data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=1200&q=80"
                         class="d-block w-100"
                         alt="Aprendices">

                    <div class="carousel-caption">
                        <h3>Formación para el futuro</h3>
                        <p>
                            Formación integral para fortalecer las
                            competencias de nuestros aprendices.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1200&q=80"
                         class="d-block w-100"
                         alt="Formación">

                    <div class="carousel-caption">
                        <h3>Educación y tecnología</h3>
                        <p>
                            Formación orientada al desarrollo
                            profesional y tecnológico.
                        </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=1200&q=80"
                         class="d-block w-100"
                         alt="Trabajo en equipo">

                    <div class="carousel-caption">
                        <h3>Trabajo en equipo</h3>
                        <p>
                            Desarrollo de proyectos mediante
                            colaboración e innovación.
                        </p>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev"
                    type="button"
                    data-bs-target="#carouselAprendices"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next"
                    type="button"
                    data-bs-target="#carouselAprendices"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </section>


    <!-- MISION Y VISION -->
    <section class="container mt-5">

        <div class="row g-4">

            <div class="col-md-6">
                <div class="card info-card shadow-sm">
                    <div class="card-body text-center">

                        <div class="icono">🎯</div>

                        <h3 class="titulo-seccion">
                            Misión
                        </h3>

                        <p>
                            Contribuir al desarrollo social y técnico
                            de los trabajadores colombianos, ofreciendo
                            formación profesional integral que permita
                            mejorar la productividad y aportar al
                            desarrollo del país.
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card info-card shadow-sm">
                    <div class="card-body text-center">

                        <div class="icono">👁</div>

                        <h3 class="titulo-seccion">
                            Visión
                        </h3>

                        <p>
                            Ser una institución líder en formación
                            profesional, innovación y desarrollo
                            tecnológico, contribuyendo a la
                            transformación social y productiva
                            de Colombia.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- INFORMACION -->
    <section class="container mt-5">

        <div class="card shadow-sm">
            <div class="card-body text-center">

                <h2 class="titulo-seccion">
                    Sistema de Administración
                </h2>

                <p>
                    Este sistema permite organizar y administrar
                    la información relacionada con los aprendices,
                    cursos, áreas, computadores, centros de formación
                    y profesores.
                </p>

            </div>
        </div>

    </section>


    <!-- MODAL LOGIN -->
    <div class="modal fade"
         id="loginModal"
         tabindex="-1"
         aria-labelledby="loginModalLabel"
         aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header bg-success text-white">

                    <h5 class="modal-title" id="loginModalLabel">
                        <i class="fas fa-user-lock me-2"></i>
                        Iniciar sesión
                    </h5>

                    <button type="button"
                            class="btn-close btn-close-white"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="text-center text-success fs-1 mb-3">
                        <i class="fas fa-user-circle"></i>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Usuario o correo
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Ingrese su usuario o correo">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">
                            Contraseña
                        </label>

                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>

                            <input type="password"
                                   class="form-control"
                                   placeholder="Ingrese su contraseña">
                        </div>
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-secondary"
                            data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="button"
                            class="btn btn-success">
                        <i class="fas fa-sign-in-alt me-1"></i>
                        Iniciar sesión
                    </button>

                </div>

            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="bg-success text-white mt-5 py-4">

        <div class="container">

            <div class="row">

                <div class="col-md-6 mb-4 mb-md-0">

                    <h5 class="fw-bold">
                        <i class="fas fa-laptop-code me-2"></i>
                        Admin SENA
                    </h5>

                    <p>
                        Sistema de gestión y administración
                        del Servicio Nacional de Aprendizaje.
                    </p>

                </div>

                <div class="col-md-6">

                    <h5 class="fw-bold">
                        Módulos del sistema
                    </h5>

                    <div class="row">

                        <div class="col-6">

                            <p class="mb-2">
                                <i class="fas fa-building me-2"></i>
                                Áreas
                            </p>

                            <p class="mb-2">
                                <i class="fas fa-desktop me-2"></i>
                                Computadores
                            </p>

                            <p class="mb-2">
                                <i class="fas fa-school me-2"></i>
                                Centros de Formación
                            </p>

                        </div>

                        <div class="col-6">

                            <p class="mb-2">
                                <i class="fas fa-book me-2"></i>
                                Cursos
                            </p>

                            <p class="mb-2">
                                <i class="fas fa-user-graduate me-2"></i>
                                Aprendices
                            </p>

                            <p class="mb-2">
                                <i class="fas fa-chalkboard-teacher me-2"></i>
                                Profesores
                            </p>

                        </div>

                    </div>
                </div>

            </div>

            <hr class="border-white opacity-50">

            <p class="text-center mb-0">
                &copy; {{ date('Y') }} Admin SENA.
                Todos los derechos reservados.
            </p>

        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>