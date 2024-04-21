<?php 
require_once('showImg.php');
$images = getImages();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subir imagen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <div class="container mt-4">
         <h1>Sube una imagen</h1>
            <!-- formulario para subir imagen -->
         <form action="saveImg.php" method="post" enctype="multipart/form-data" class="form-control">
             <input type="file" name="img" accept="image/*" required>
             <input type="submit" value="Subir" class="btn btn-dark">
         </form>
   </div>


   <!-- parte donde se muestran las imagenes -->
   <div class='container img-fluid'>
      <?php if(is_array($images)): ?>

           <?php foreach($images as $image): ?>
           <img src="<?php echo $image; ?>" alt="imagen" style="width: 200px;" class="mt-4" > 
           <?php endforeach ?>

      <?php else: ?>

        <p class="m-4" ><?php echo $images ?></p>
        
      <?php endif ?>

   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>