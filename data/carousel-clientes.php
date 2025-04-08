<?php 

$clientes = scandir(__DIR__.'/clientes');
$items = array();
for($i = 2;$i<count($clientes);$i++){
    $file = file_get_contents(__DIR__.'/clientes/'.$clientes[$i]);
    $json_data = json_decode($file, true);

    array_push($items,
        array(
            'id' => $json_data['id'],
            'thumbnail' => $json_data['thumbnail'],
            'link' => $json_data['link']
        )
    );
}

$carousel_data = array(
    'link'=>'#',
    'href'=>'',
    'items'=>$items
);

?>