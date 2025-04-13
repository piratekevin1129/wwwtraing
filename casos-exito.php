<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'includes/styles.php'?>
    <link href="assets/css/casos-exito.css" rel="stylesheet" type="text/css" />
    <link href="includes/components/scss/carousel.css" type="text/css" rel="stylesheet" />
    
    <title>Traing - Casos de éxito</title>
</head>
<body>
    <?php include 'includes/header.php' ?>

    <div class="banner">
        <img src="assets/images/casos-exito/banner.jpg" />
    </div>
    <div class="bannertip">
        <div class="bannertip-box">
            <div class="bannertip-content">
                <h1><span>Múltiples</span> experiencias dan más razones para implementar <span>TRAING</span></h1>
                <p>Fácil accesibilidad, Retroalimentación, Personalización, Flexibilidad, Retención, Desempeño, Rendimiento, Productividad y Retorno sobre la inversión.</p>
            </div>
        </div>
        <div class="bannertip-img">
            <img src="assets/images/sobre-nosotros/banner-tip-icon.svg" />
        </div>
    </div>

    <div class="container py-100">
        <div class="casos-grid">
            <?php include 'data/casos-exito.php' ?>

            <?php for($i = 0;$i<count($casos_data);$i++) { ?>
                <div class="caso-row">
                    <a class="caso-card" href="#">
                        <div class="caso-img">
                            <div style="background-image: url('<?php echo $casos_data['items'][$i]['thumbnail']?>');"></div>
                            <button class="caso-img-play"></button>
                        </div>
                        <p class="caso-nombre"><?php echo $casos_data['items'][$i]['nombre']?></p>
                        <p class="caso-cargo"><?php echo $casos_data['items'][$i]['cargo']?></p>
                        <p class="caso-empresa"><?php echo $casos_data['items'][$i]['empresa']?></p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

    
    <?php include 'includes/footer.php' ?>
</body>
</html>