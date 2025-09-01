<?php

include('router.php');
include('themes/'.$odg_theme.'/header.php');

 ?>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <img class="jumbotron-heading" src="<?php echo $odg_logo; ?>" style="height: 200px" alt="Logo <?php echo $odg_name; ?>"/>
          <h1 class="jumbotron-heading"><?php echo $odg_name; ?></h1>
          <p class="lead text-muted"><?php echo $odg_tagline; ?></p>
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
<?php foreach($odg_contacts as $odg => $params): ?>
            <div class="col-md-<?php echo $odg_card_size; ?> mb-4">
              <div class="card mb-6 box-shadow">
                <div class="card-body">
                  <div style="height: 225px;" class="d-flex">
                      <img class="mx-auto align-self-center" src="images/logos/<?php echo $params['logo']; ?>" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=<?php echo $params['title']; ?>" alt="Logo <?php echo $params['title']; ?>"  style="max-height: 225px;">
                  </div>
                  <h5 class="py-1 px-3 card-title text-center"><?php echo $params['title']; ?></h5>
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
                    <a class="text-muted" href="plus.php?odg=<?php echo $odg; ?>">Plus d'info</a>
                </div>
              </div>
            </div>
<?php endforeach; ?>
      </div>
      </div>
      </div>

    </main>
<?php include('themes/'.$odg_theme.'/footer.php');
