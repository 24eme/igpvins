<?php

$odg_contacts = [
    "aocgaillac" => array (
        "title" => "Syndicat de défense des vins AOC Gaillac",
        "adresse" => "Maison des Vins – Abbaye Saint Michel<br/><br/>81600 GAILLAC",
        "contact" => "05 63 57 15 40<br/>contact@vins-gaillac.com<br/><a href='http://www.vins-gaillac.com'>Site web</a><br/><b>Contact:</b> Caroline Granado<br/><b>Président:</b> Cédric Carcenac",
        "portail"=>"https://teledeclaration.vins-gaillac.com/",  "logo"=> "logo_aocgaillac.png"
    ),
];

include("config/igp.php");
$odg_contacts['tarn'] = $igp_contacts['tarn'];

$odg_theme = 'gaillac';
$odg_name = 'Vins de Gaillac';
$odg_tagline = 'Retrouver depuis cette pages les adresses de tous les portails et documents des Syndicats viticoles des Vins de Gaillac.';
$odg_logo = '/images/gaillac.png';
