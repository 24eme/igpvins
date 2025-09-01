<?php

$odg_card_size = 4;

if(strpos($_SERVER['HTTP_HOST'], 'gaillac') !== false ) {
    include('config/gaillac.php');
}elseif (strpos($_SERVER['HTTP_HOST'], 'igp') !== false ) {
    include('config/igp.php');
}

$type_documents = array(
        "TEXTEOFFICIEL" => "Textes officiels",
        "FORMULAIREDECLARATIF" =>"Formulaires déclaratifs",
        "AUTREDOCUMENT" => "Autres documents",
);

foreach($odg_contacts as $igp => $details) {
    $docs = array();
    global $docs;
    if (is_dir('documents/'.$igp)) {
      foreach (scandir('documents/'.$igp) as $file) {
        if (preg_match('/([0-9-]*)_([A-Z]*)_(.*)(.pdf|.doc)/', $file, $m)) {
            if (isset($type_documents[$m[2]])) {
                $docs[] = array($type_documents[$m[2]], $m[1], $m[3], $m[0]);
            }
        }
      }
    }
    uksort($docs, function ($b, $a) { global $docs;return strcmp($docs[$a][0].$docs[$a][1].$docs[$a][2], $docs[$b][0].$docs[$b][1].$docs[$b][2]); } );
    $odg_documents[$igp] = $docs;
}
