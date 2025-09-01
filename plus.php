<?php

include('router.php');

$igp = $odg_contacts[$_GET['odg']];
$documents = $odg_documents[$_GET['odg']];

if (isset($igp['url_plusdinfo'])) {
    header('Location: '.$igp['url_plusdinfo']."\n");
    exit;
}

include('themes/'.$odg_theme.'/header.php'); ?>

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
              <li><?php echo preg_replace('/(\d+)-(\d+)-(\d+)/', '$3/$2/$1', $doc[1]); ?> : <a href="documents/<?php echo $_GET['odg'].'/'.$doc[3]?>"><?php echo $doc[2]; ?></a></li>
            <?php endforeach; ?>
            </div>
         </div>
      </div>
      <div class="py-5 bg-light">
      </div>
    </main>

 <?php include('themes/'.$odg_theme.'/footer.php');
