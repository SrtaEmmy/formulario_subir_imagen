<?php
function getImages(){
    require_once ('database/conn.php');

    $sql = "SELECT url_image FROM images";
    $result = $connection->query($sql);

    $images = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $images[] = $row['url_image'];
        }
        return $images;
    }else{
        return "No hay imágenes subidas ¡Sube una!";
    }

}


?>