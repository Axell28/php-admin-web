<?php

use Admin\Models;

$objEmpresa = new Models\EmpresaModel;
$objGalerias = new Models\GaleriasModel;
$dataEmpresa = $objEmpresa->listEmpresa()[1];
$dataGalerias = $objGalerias->listGaleriasInWeb();
?>
<!DOCTYPE html>
<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="<?= $dataEmpresa['metades'] ?>">
     <title><?= mb_strtoupper($dataEmpresa['nombre'], 'UTF-8') ?></title>
     <link rel="shortcut icon" href="<?= PATH_PUBLIC ?>/img/icons/escudo.png" type="image/png">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
     <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/animate.min.css">
     <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= PATH_PUBLIC ?>/css/web.css">
</head>

<body>

     <script src="<?= PATH_PUBLIC ?>/js/bootstrap.min.js"></script>

     <?php include_once PATH_ROOT . '/views/web/partials/header.php'; ?>

     <style>
          .portada {
               background-color: var(--color3);
          }

          .portada h2 {
               letter-spacing: 0.1em;
               word-spacing: 0.1em;
          }

          .breadcrumb-item+.breadcrumb-item::before {
               color: white;
          }

          .breadcrumb-item>a {
               color: white;
               font-size: 14.5px;
          }
     </style>

     <div class="container-fluid portada">
          <div class="container py-3 animate__animated animate__slideInLeft">
               <ol class="breadcrumb pb-0 mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="/galeria-lista">Galerías</a></li>
               </ol>
               <div class="mt-3">
                    <h2 class="text-white">Galería de Imágenes</h2>
               </div>
          </div>
     </div>

     <br><br><br>

     <div class="container">
          <div class="row">
               <?php foreach ($dataGalerias as $key => $value) { ?>
                    <div class="col-md-4">
                         <div class="card border-0" style="background-color: rgba(251, 251, 251); box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;">
                              <div class="card-body">
                                   <img src="<?= $value['portada'] ?>" class="rounded" width="100%">
                                   <div class="pt-3">
                                        <h5 class="fw-bold"><?= $value['titulo'] ?></h5>
                                        <p class="text-muted">
                                             <?= date('M d, Y', strtotime($value['fecreg'])) ?>
                                        </p>
                                        <a href="/galeria/<?= $value['idgaleria'] ?>">Ver galería</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               <?php } ?>
          </div>
     </div>

</body>

</html>