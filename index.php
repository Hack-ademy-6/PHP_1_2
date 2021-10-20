<?php
session_start();
$name = "Gracia";
#var_dump($_SESSION["products"]);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Productos php</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <h1> <?php echo $name ?> agrega un producto</h1>
                <form action="form.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="examplePrice" class="form-label">Price</label>
                        <input name="price" type="number" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3"> <!-- el campo img lo recogemos pero sólo la url, para subir fotos y guardar, lo haremos con laravel -->
                        <label for="exampleImg" class="form-label">Img</label>
                        <input name="img" type="url" class="form-control" id="exampleInputPassword1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
        <?php if(isset($_SESSION['products'])){?> <!-- isset comprueba si existe variable, en este caso, si existen productos dentro de la sesión -->
           <?php foreach ($_SESSION['products'] as $product){
               ?>
           
            <div class="col-12 col-md-3">
                <!-- query string: Es una manera de pasar parámetros en una URL a través de una request get.
                Luego lo que quieres hacer con ellos no importa, imprimirlos, buscarlos en el db etc.
                En este caso, pasar parámetro random para que devuleva fotos distintas -->
                  <!--  <img src="https://picsum.photos/200/300q=<?php /* echo rand(10, 20); */ ?>" class="card-img-top" alt="...">  -->

                   <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="..."> <!-- copiando url de la imagen -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['title'] ?></h5> <span class="badge bg-secondary"><?php echo $product['price'] ?></span>
                        <p class="card-text"><?php echo $product['description'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>
            <?php } ?>
            <?php } else { ?>
            <div class="col-12 col-md-6 mx-auto">
               <h2>No products available</h2>
            </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>