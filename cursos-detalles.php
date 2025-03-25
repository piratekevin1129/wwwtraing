<?php 
if(isset($_GET['course'])){
    include 'framework/functions.php';
    $c = sanitize($_GET['course']);

    $file = file_get_contents('data/cursos/curso'.$c.'-info.json');
    $json_data = json_decode($file, true);
?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php include 'includes/styles.php'?>
        <link href="assets/css/cursos-detalles.css" rel="stylesheet" type="text/css" />
        
        <title>Traing - Curso <?php echo $json_data['title'] ?></title>
    </head>
    <body>
        <?php include 'includes/header.php' ?>
    
        <div class="main-supertitle">
            <h1>Cursos listos a implementar</h1>
        </div>
        
        <div class="container">
            <div class="cursos-detalles-col">
                <div class="cursos-detalles-row">
                    <div class="cursos-detalles-acordeon cursos-detalles-acordeon-opened" status="opened">
                        <div class="cursos-detalles-acordeon-header" onclick="clickAcordeon(this)">
                            <span>Acerca de este curso</span>
                            <img src="assets/icons/collapse-expand-acordeon.svg" />
                        </div>
                        <div class="cursos-detalles-acordeon-body">
                            <ul class="cursos-detalles-acordeon-interactive-ul">
                                <li>
                                    <div>
                                        <img src="assets/icons/reloj.svg" />
                                    </div>
                                    <p><?php echo $json_data['tiempo_duracion'] ?></p>
                                </li>
                                <li>
                                    <div>
                                        <img src="assets/icons/temas.svg" />
                                    </div>
                                    <p><?php echo count($json_data['temario']).' temas' ?></p>
                                </li>
                                <li>
                                    <div>
                                        <img src="assets/icons/actividades.svg" />
                                    </div>
                                    <p><?php echo $json_data['numero_actividades'] ?></p>
                                </li>
                                <li>
                                    <div>
                                        <img src="assets/icons/certificado.svg" />
                                    </div>
                                    <p>Certificado</p>
                                </li>
                                <li>
                                    <div>
                                        <img src="assets/icons/movil.svg" />
                                    </div>
                                    <p>Acceso a dispositivos móviles</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="cursos-detalles-acordeon cursos-detalles-acordeon-closed" status="closed">
                        <div class="cursos-detalles-acordeon-header" onclick="clickAcordeon(this)">
                            <span>Términos y condiciones</span>
                            <img src="assets/icons/collapse-expand-acordeon.svg" />
                        </div>
                        <div class="cursos-detalles-acordeon-body">
                            <ul class="cursos-detalles-acordeon-ul">
                                <li>Incluye actualización normativa periódica del contenido.</li>
                                <li>Este valor aplica solo por la suscripción a la Plataforma TRAING</li>
                                <li>Descuento del 7% por el pago de la suscripción anual anticipada ($1.672.884)</li>
                                <li>Pago de la suscripción por demanda. El servicio no cuenta con cláusulas de permanencia, sin embargo, a fin de poder extraer la información que se tenga en la plataforma, deberá informar con 30 días de anticipación la intención de terminar con la prestación del servicio.</li>
                                <li>Descuento del 10%, adquiriendo 5 cursos o más.</li>
                            </ul>
                        </div>
                    </div>

                    <button class="cursos-detalles-quiero-btn">Quiero este curso</button>
                    <p class="cursos-detalles-precio"><?php echo $json_data['precio'] ?></p>
                </div>

                <div class="cursos-detalles-row">
                    <?php if(!empty($json_data['video'])){ ?>
                        <div class="cursos-detalles-video">
                            <iframe class="cursos-detalles-video-embed"
                                src="<?php echo $json_data['video']?>" 
                                title="YouTube video player" 
                                frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    <?php } else {?>
                        <div class="cursos-detalles-thumbnail">
                            <img class="cursos-detalles-thumbnail-img" src="<?php echo $json_data['thumbnail']?>" />
                        </div>
                    <?php } ?>
                    <h2 class="cursos-detalles-title"><?php echo $json_data['title'] ?></h2>
                    <p class="cursos-detalles-descripcion"><?php echo $json_data['descripcion'] ?></p>
                    <div class="cursos-detalles-temario">
                        <?php for($i = 0;$i<count($json_data['temario']);$i++){ ?>
                        <div class="cursos-detalles-temario-item">
                            <img src="assets/icons/<?php echo $json_data['temario'][$i]['type']?>.svg" />
                            <p><?php echo $json_data['temario'][$i]['name']?></p>
                            <div>
                                <span><?php echo $json_data['temario'][$i]['duration']?></span>
                                <img src="assets/icons/reloj-2.svg" />
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="assets/scripts/acordeon.js"></script>

        <?php include 'includes/footer.php' ?>
    </body>
    </html>
<?php } else { 
    header("Location: error.php");
} ?>

