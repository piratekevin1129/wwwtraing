<?php 

$cursos = scandir(__DIR__.'/cursos');
$items = array();
for($i = 2;$i<count($cursos);$i++){
    $file = file_get_contents(__DIR__.'/cursos/'.$cursos[$i]);
    $json_data = json_decode($file, true);

    array_push($items,
        array(
            'id' => $json_data['id'],
            'title' => $json_data['title'],
            'description' => $json_data['descripcion'],
            'thumbnail' => $json_data['thumbnail'],
            'link' => $json_data['link']
        )
    );
}

$carousel_data = array(
    //'link'=>'cursos-detalles.php?course=',
    'link'=>'https://docs.google.com/document/d/1voqkGi6tMf-qpZxe8GyUPgBPSFMIi1ahJzE6FgLcjfo/edit?usp=sharing'
    'items'=>$items
);

?>