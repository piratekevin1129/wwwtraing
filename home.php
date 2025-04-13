<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'includes/styles.php'?>

    <link href="assets/css/home.css" rel="stylesheet" type="text/css" />
    <link href="includes/components/scss/carousel.css" type="text/css" rel="stylesheet" />
    
    <title>Traing</title>
</head>
<body>
    <?php include 'includes/header.php' ?>

    <div class="banner-principal">
        <img src="assets/images/home/banner-principal.jpg" />
        <div class="banner-principal-icons">
            <div class="banner-principal-icon">
                <img src="assets/images/home/funciones.svg" />
                <div>
                    <p>Funciones que facilitan tu vida</p>
                    <a>
                        Ver más 
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="banner-principal-icon">
                <img src="assets/images/home/cursos.svg" />
                <div>
                    <p>Cursos creativos y personalizados</p>
                    <a>
                        Ver más 
                        <span></span>
                    </a>
                </div>
            </div>

            <div class="banner-principal-icon">
                <img src="assets/images/home/promovemos.svg" />
                <div>
                    <p>Promovemos la educación virtual</p>
                    <a>
                        Ver más 
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="video-seccion">
        <div class="video-seccion-col1">
            <h1 class="video-seccion-title"><span>Capacita</span> a tus colaboradores <span>con TRAING</span></h1>
            <p class="video-seccion-text">Te ayudamos en la capitalización del conocimiento de tu empresa, identificando tus recursos de valor intelectual tangibles e intangibles, para capturarlos y digitalizarlos en la plataforma gracias al módulo de creación de contenidos</p>
        </div>
        <div class="video-seccion-btn">
            <img src="assets/images/home/video-thumbnail.jpg" />
            <button></button>
        </div>
    </div>

    <div class="funcionalidades-seccion">
        <h1>Las funcionalidades incluidas en <span>TRAING</span></h1>
        <p>Facilitarán tu vida y la de tus colaboradores</p>

        <div class="funcionalidades-grid">
            <div class="funcionalidades-item">
                <img src="assets/images/home/videopresentaciones.jpg" />
                <span>Videopresentaciones</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/biblioteca.jpg" />
                <span>Biblioteca didáctica</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/evaluaciones.jpg" />
                <span>Evaluaciones interactivas</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/scorm.jpg" />
                <span>Compatibilidad con SCORM</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/responsive.jpg" />
                <span>Responsive</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/modular.jpg" />
                <span>Sistema modular</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/colaborar.jpg" />
                <span>Herramienta para colaborar en línea</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/grabaciones.jpg" />
                <span>Grabaciones de pantalla</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/certificados.jpg" />
                <span>Certificados personalizados</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/diseno.jpg" />
                <span>Diseño personalizado</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/acceso.jpg" />
                <span>Acceso perfilado</span>
            </div>

            <div class="funcionalidades-item">
                <img src="assets/images/home/garantia.jpg" />
                <span>Garantía ilimitada</span>
            </div>
        </div>
    </div>

    <div class="cursos-seccion">
        <div class="cursos-fondo">
            <img src="assets/images/home/banner-cursos.png" />
        </div>
        <div class="cursos-content">
            <h1>¡Si, tú también puedes crear cursos en <br> <span>TRAING</span> igual de increíbles!</h1>
            <div class="cursos-content-col">
                <div class="cursos-content-row">
                    <div class="cursos-content-icono">
                        <img src="assets/images/home/cursos-crea.svg" />
                        <p>CREA</p>
                    </div>
                </div>

                <div class="cursos-content-row">
                    <div class="cursos-content-mas">
                        <img src="assets/images/home/cursos-mas.svg" />
                    </div>
                </div>

                <div class="cursos-content-row">
                    <div class="cursos-content-icono">
                        <img src="assets/images/home/cursos-almacena.svg" />
                        <p>ALMACENA</p>
                    </div>
                </div>

                <div class="cursos-content-row">
                    <div class="cursos-content-mas">
                        <img src="assets/images/home/cursos-mas.svg" />
                    </div>
                </div>

                <div class="cursos-content-row">
                    <div class="cursos-content-icono">
                        <img src="assets/images/home/cursos-administra.svg" />
                        <p>ADMINISTRA</p>
                    </div>
                </div>
            </div>
            <p>Realiza inscripciones, asigna cursos, segmenta actividades, define ingreso a encuestas y evaluaciones, todo de acuerdo con el perfil de cada usuario: estudiante, responsable, auxiliar o administrador. Nuestra plataforma es compatible con distintos formatos: Word, PDF, PowerPoint, Excel, mp4, html5, SCORM y otros.</p>
        </div>
    </div>
    
    <div class="cursos-carousel">
        <?php include 'data/cursos-home-info.php' ?>
        <?php include 'includes/components/carousel.v2/carousel.php' ?>
    </div>

    <div class="clientes-seccion">
        <h1>Nuestros <span>Clientes</span></h1>
        <p>Estas han sido algunas de las empresas e instituciones que han confiado en nosotros:</p>

        <div class="clientes-carousel">
            <?php include 'data/carousel-clientes.php' ?>
            <?php include 'includes/components/carousel.v3/carousel.php' ?>
        </div>
    </div>

    <div class="container-black py-100">
        <div class="columna-center">
            <div>
                <p class="submain-text">¿Necesitas capacitar un numero diferentes de usuarios? <br> <span>Contáctanos</span> ya y pídenos una cotización personalizada.</p>

                <a class="orange-button" href="#">
                    <img src="assets/icons/whatsapp.svg" />
                    <span>¡Contáctanos!</span>
                </a>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php' ?>

    <script src="includes/components/carousel.v2/carousel.js"></script>
    <script src="includes/components/carousel.v3/carousel.js"></script>
</body>
</html>