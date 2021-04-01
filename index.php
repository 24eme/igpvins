<?php

$igps = array(
    "allobrogies" => array(title=>"Syndicat des Vins des Alpes du Nord", portail=>"https://www.innov-agro.igpvins.fr/",  logo=> "logo_igpallobrogies.png"),
    "ardeche" => array(title=>"Syndicat des vins d'Ardeche", portail=>"https://ardeche.igp.vins.24eme.fr/",  logo=> "logo_igpardeche.png"),
    "aude" => array('title'=>'Syndicat des IGP de l′Aude', portail=>"https://www.innov-agro.igpvins.fr/", logo => "logo_igpaude.png"),
    "13" => array(title=>"Syndicat IGP des Bouches du Rhone", portail=> array('Antenne d\'Aix' => "https://13.igp.vins.24eme.fr/", 'Antenne d\'Arles' => "https://arles.igp.vins.24eme.fr/"),  logo=> "logo_igp13.png"),
    "charentais" => array(title=>"Syndicat des Vins de Pays Charentais",  portail=>"https://www.innov-agro.igpvins.fr/",  logo=> "logo_igpcharentais.png"),
    "drome" => array(title=>"Syndicat des vins de la Drome", portail=>"https://drome.igp.vins.24eme.fr/",  logo=> "logo_igpdrome.png"),
    "gard" => array(title=>"Fédération Gardoise des Vins à IGP", portail=>"https://www.innov-agro.igpvins.fr/",  logo=> "logo_igpgard.png"),
    "gascogne" => array(title=>"Syndicat des Cotes de Gascogne", portail=>"https://gascogne.igp.vins.24eme.fr/",  logo=> "logo_igpgascogne.png"),
    "herault" => array('title' => 'Fédération<br/>IGP 34', 'portail' => "https://www.innov-agro.igpvins.fr/", logo => "logo_igpherault.png"),
    "loire" => array(title=>"Syndicat des vins IGP Val de Loire", portail=>"https://loire.igp.vins.24eme.fr/",  logo=> "logo_igploire.png"),
    "var" => array(title=>"Syndicat des vins du Var", portail=>"https://var.igp.vins.24eme.fr/",  logo=> "logo_igpvar.png"),
    "vaucluse" => array(title=>"Syndicat des vins du Vaucluse", portail=>"https://vaucluse.igp.vins.24eme.fr/",  logo=> "logo_igpvaucluse.png"),
    "med" => array(title=>"Fédération Inter-Med", portail=>"https://med.igp.vins.24eme.fr/", logo=> "logo_igpmed.png" )
);

?><!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="La plateforme de télédéclarations de IGP ">
    <meta name="author" content="IGP & 24eme">

    <title>OpenODG : IGP</title>
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
          <img class="jumbotron-heading" src="/images/igp.png" style="height: 200px" alt="Logo IGP"/>
          <h1 class="jumbotron-heading">Vins IGP</h1>
          <p class="lead text-muted">Retrouver depuis cette pages les adresses de tous les portails et documents des Syndicats viticoles des IGP.</p>
          <p>
<!--
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
-->
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
      <div class="container">
      <div class="row">
<?php foreach($igps as $igp => $params): ?>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <div style="height: 225px;" class="d-flex">
                      <img class="mx-auto align-self-center" src="images/logos/<?php echo $params['logo']; ?>" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=<?php echo $params['title']; ?>" alt="Logo <?php echo $params['title']; ?>"  style="max-height: 225px;">
                  </div>
                  <h5 class="py-1 px-5 card-title text-center"><?php echo $params['title']; ?></h5>
                  <?php if (is_array($params['portail'])): ?>
                  <div class="row">
                  <?php foreach ($params['portail'] as $nom => $url ): ?>
                  <div class="col-sm-6">
                  <a href="<?php echo $url; ?>" class="btn btn-block btn-primary"><?php echo $nom; ?></a>
                  </div>
                  <?php endforeach; ?>
                  </div>
                  <?php else: ?>
                    <div class="d-flex">
                    <a href="<?php echo $params['portail']; ?>" class="btn btn-block btn-primary">Accéder au portail</a>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="card-footer text-center">
                    <a class="text-muted" href="plus.php?igp=<?php echo $igp; ?>">Plus d'info</a>
                </div>
              </div>
            </div>
<?php endforeach; ?>
      </div>
      </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="https://vinigp.fr/">Confédération des IGP</a>
        </p>
        <p>Portail de télédéclaration des syndicats viticoles des IGP.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.0/holder.js"></script>
  </body>
</html>
