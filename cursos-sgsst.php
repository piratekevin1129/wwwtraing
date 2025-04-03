<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'includes/styles.php'?>
    
    <title>Traing - Cursos</title>
</head>
<body>
    <?php include 'includes/header.php' ?>

    <div class="banner">
        <img src="assets/images/cursos-sgsst/cursos-sst.jpg" />
    </div>
    <div class="bannertip">
        <div class="bannertip-box">
            <div class="bannertip-content">
                <h1><span>Cursos virtuales</span> listos para implementar</h1>
                <p>Tenemos a su disposición, cursos virtuales con enfoque en los principales riesgos adaptados al contexto actual.</p>
                <h6>¡Solicita el curso que sea de tu interés!, contamos con variedad de temas.</h6>
            </div>
        </div>
        <div class="bannertip-img">
            <img src="assets/images/cursos-sgsst/banner-tip-icon.svg" />
        </div>
    </div>

    <div class="container-fluid">
        <h1 class="main-title">Cursos de <span>Seguridad y Salud en el Trabajo</span></h1>

        <?php include 'data/cursos-sgsst-carousel1-info.php' ?>

        <link href="includes/components/scss/carousel.css" type="text/css" rel="stylesheet" />
        <?php include 'includes/components/carousel/carousel.php' ?>

        <a href="https://docs.google.com/document/d/1voqkGi6tMf-qpZxe8GyUPgBPSFMIi1ahJzE6FgLcjfo/edit?usp=sharing" target="_blank" class="main-button">Ver más cursos</a>
    </div>


    <?php include 'includes/footer.php' ?>

    <script src="includes/components/carousel/carousel.js"></script>
</body>
</html>