<?php 

$casos = scandir(__DIR__.'/casos');
$items = array();
for($i = 2;$i<count($casos);$i++){
    $file = file_get_contents(__DIR__.'/casos/'.$casos[$i]);
    $json_data = json_decode($file, true);

    array_push($items,
        array(
            'id' => $json_data['id'],
            'nombre' => $json_data['nombre'],
            'cargo' => $json_data['cargo'],
            'empresa' => $json_data['empresa'],
            'thumbnail' => $json_data['thumbnail'],
            'link' => $json_data['link']
        )
    );
}

$casos_data = array(
    'link'=>'#',
    'href'=>'',
    'items'=>$items
);

?>