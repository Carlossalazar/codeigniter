<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php echo $title ?></title>

  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/js/bootstrap.js')?>"></script>

</head>

<body >

  <header>
    cabeza
  </header>



   <div id="container">

     <div class="col-md-5">
       <?php
          $this->load->view($contenido);
        ?>

     </div>

    </div>

    <footer >

      <!--

      <div class="container">
        <div class="row">
          <div class="span6"><center>2015 Todos los Derechos Reservados</div>

          </div>
        </div>
        -->

      </footer>

  </body>

  </html>
