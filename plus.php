<?php

include('igp.php');

$igp = $igp_contacts[$_GET['igp']];
$documents = $igp_documents[$_GET['igp']];

if (isset($igp['url_plusdinfo'])) {
    header('Location: '.$igp['url_plusdinfo']."\n");
    exit;
}

?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La plateforme de télédéclarations de IGP ">
    <meta name="author" content="IGP & 24eme">

    <title>OpenODG : <?php echo $igp['title']; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
   <style>
   <!--
.bg-dark{ background-color: #af588f !important; }

.btn-primary:hover {
    color: #fff;
    background-color: #af588f;
    border-color: #fff;
}

.btn-primary {
    color: #fff;
    background-color: #af588f;
    border-color: #af588f;
}

#navbarHeader .text-muted {
    color: #ec95cc !important;
}
   -->
   </style>
  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Portail des Vins IGP</h4>
              <p class="text-muted">Retrouver depuis cette pages les adresses de tous les portails et documents des Syndicats viticoles des IGP</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white"></h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
                <li><a href="#" class="text-white"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <strong>Portail des Vins IGP</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading"><?php echo $igp['title']; ?></h1>
          <p class="lead text-muted"><?php echo $igp['adresse']; ?></p>
          <p class="lead text-muted"><?php echo $igp['contact']; ?></p>
        </div>
      </section>

      <div class="my-5 py-1">
         <div class="container">
            <div class="row">
            <?php foreach($documents as $doc): ?>
              <?php if ($doc[0] != $actualtitle): $actualtitle = $doc[0]; ?>
                <?php if ($actualtitle): ?>
                </ul>
                </div>
                <?php endif; ?>
                <div class="col-sm-12">
                <h2 id="<?php echo str_replace(" ", "_", strtolower($actualtitle)); ?>"><?php echo $actualtitle; ?></h2>
                <ul>
              <?php endif; ?>
              <li><?php echo preg_replace('/(\d+)-(\d+)-(\d+)/', '$3/$2/$1', $doc[1]); ?> : <a href="documents/<?php echo $_GET['igp'].'/'.$doc[3]?>"><?php echo $doc[2]; ?></a></li>
            <?php endforeach; ?>
            </div>
         </div>
      </div>
      <div class="py-5 bg-light">
      </div>
    </main>
  </body>
 </html>

