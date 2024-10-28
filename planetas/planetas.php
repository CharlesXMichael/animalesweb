<?php

class Planetas{
    public $id;
    public $nombre;
    public $imagen;

}

function getAll(){
    $listaPlanetas = [];
    $path = $_SERVER['DOCUMENT_ROOT'];
    include($path."/animalesweb/php/connection/db.php");
    $query = "SELECT id, nombre imagen FROM planetas";
    $result = $connection->query($query);
    if($result->num_rows >0){
        while($rows = $result->fetch_assoc()){
            $object = new Planetas();
            $object->id = $rows["id"];
            $object->nombre = $rows["nombre"];
            $object->imagen = $rows["imagen"];
            $listaPlanetas[] = $object;
        }
    }
    return $listaPlanetas;
}
