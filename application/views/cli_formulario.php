<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
    <script src="<?php echo base_url();?>bootstrap/js/boststrap.js"></script>


</head>
<body>

    <h1 >AGREGAR</h1>

   <div class="container">
        <div class="row">
            <div class="col-md-4">

            <h1>Agregar Clientes</h1>

   


<?php
echo form_open_multipart('cliente/agregarbd');
?>

                    <input type="text" name="nombre" placeholder="Escribe el nombre" class="form-control">
                    <input type="text" name="apellido1" placeholder="Apellido Paterno" class="form-control">
                    <input type="text" name="apellido2" placeholder="Apellido Materno" class="form-control">

                    <button type="submit" class="btn btn-success">AGREGAR</button>
<?php
echo form_close();
?>                    

             

            </div>


        </div>

   </div>

    


    



    

 <script src="<?php echo base_url();?>bootstrap/js/boststrap.bundle.min.js"></script>

</body>
</html>