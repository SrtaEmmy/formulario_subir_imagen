<?php
require_once ('database/conn.php');

$error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['img'])) {

            if (!is_dir('uploads')) {
                mkdir('uploads', 0777);
            }

            $name_img = $_FILES['img']['name'];
            $tmp_name = $_FILES['img']['tmp_name'];

            // subir a directorio uploads
            move_uploaded_file($tmp_name, "uploads/$name_img");

            // subir a base de datos
            $sql = "INSERT INTO images VALUES(NULL, 'uploads/$name_img')";
            $connection->query($sql);

            header('Location: index.php');

        }
    }




?>