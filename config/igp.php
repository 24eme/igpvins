<?php
if (isset($_GET['igp'])) {
    $_GET['odg'] = $_GET['igp'];
}

$igp_contacts = array(
    "alpesdusud" => array(
        "title" => "Syndicat des Vins des Alpes du Sud",
        "adresse" => "2 rue Osco Manosco<br/><br/>04860 PIERREVERT",
        "contact" => "04 90 12 45 20<br/>direction@vins-des-alpes-du-sud.fr<br/><br/><b>Contact : </b>Mladen GRUMIC<br/><b>Président AOP :</b> Gilles DELSUC<br/><b>Président IGP :</b>  Frédéric PORT<br/>",
        "portail"=>"https://alpes.igp.vins.24eme.fr/",  "logo"=> "logo_igpalpes.png"
    ),
    "ardeche" =>  array (
        "title" => "Syndicat des Vins IGP d′Ardeche",
        "adresse" => "Maison des Vignerons<br />218 Route de Ruoms<br/><br/>07150 VALLON PONT D'ARC",
        "contact" => "04 75 93 90 13<br/>svdp-fcca@wanadoo.fr<br/><a href='http://www.lesvinsdardeche.com'>Site web</a><br/><b>Contact:</b> Catherine JURY - Anne MOISAN<br/><b>Président :</b> Jérôme VOLLE<br/>",
        "portail"=>"https://ardeche.igp.vins.24eme.fr/",  "logo"=> "logo_igpardeche.png"
    ),
    "aude" => array (
        "title" => "Union Syndicale des IGP de l′Aude",
        "adresse" => "Maison des Vignerons - ZAC Bonne Source<br/>22 rue Ernest Cognacq - BP 40527<br/>11105 NARBONNECedex",
        "contact" => "04.68.90.22.29<br/>l.zorzettig@vignerons.com<br/><br/><b>Contact:</b> Laurence ZORZETTIG<br/><b>Président:</b> Ludovic ROUX<br/>",
        "portail"=>"https://www.innov-agro.igpvins.fr/", "logo" => "logo_igpaude.png"
    ),
    "13" => array (
        "title" => "Syndicat des vins IGP des Bouches-du-Rhone",
        "adresse" => "Maison des Agriculteurs<br/>22 Avenue Henri-Pontier<br/>13626 AIX EN PROVENCE Cedex 1",
        "contact" => "06.23.90.24.41<br/>igp13@orange.fr<br/><br/><b>Contact:</b> Marie DE MONTE<br/><b>Président:</b> Jean-Claude PELLEGRIN<br/>",
        "portail"=> array('Antenne d\'Aix' => "https://13.igp.vins.24eme.fr/", 'Antenne d\'Arles' => "https://arles.igp.vins.24eme.fr/"),  "logo" => "logo_igp13.png",
        "url_plusdinfo" => "https://www.igp13vins.com/documents-officiels-2.html",
    ),
    "charentais" => array (
        "title" => "Syndicat des Vins de Pays Charentais",
        "adresse" => "23 allees Bernard Guionnet - BP 90018<br/><br/>16101 COGNAC CEDEX",
        "contact" => "05 17 22 00 00<br/>info@vindepayscharentais.fr<br/><a href='http://www.vindepayscharentais.fr'>Site web</a><br/><b>Contact:</b> Julie FOUASSIER<br/><b>Président:</b> Thierry JULLION<br/>",
        "portail"=>"https://www.innov-agro.igpvins.fr/",  "logo"=> "logo_igpcharentais.png"
    ),
    "sudouest" => array (
        "title" => "Fédération Régionale des vins IGP du Sud-Ouest<br/><small>(Ariège, Aveyron, Comté Tolosan, Lavilledieu, Thezac Perricard)</small>",
        "adresse" => "BP 82256 – Auzeville<br/>31322 Castanet Tolosan",
        "contact" => "05.61.75.42.82<br/>s.arenes@coopoccitanie.fr<br/><b>Contact:</b> Sandrine ARENES DABAN<br/><b>Président :</b> Christophe Bou<br/>",
        "portail"=>"https://sudouest.igp.vins.24eme.fr/",  "logo"=> "logo_igpsudouest.png", "logo_height" => 178

    ),
    "drome" => array (
        "title" => "Federation Dromoise des IGP viticoles",
        "adresse" => "Bureau Viti 26 - Immeuble CER FRANCE Drome Vaucluse<br/>ZA des Grands Crus - 1575, chemin des Levees<br/>26600 TAIN l'HERMITAGE",
        "contact" => "04 75 07 80 06 - 06 12 02 41 03<br/><br/>viti26@orange.fr<br/><br/><b>Contact:</b> Juliette VIOLETTE<br/><b>Président:</b> Adelin MARCHAUD<br/>",
        "portail"=>"https://drome.igp.vins.24eme.fr/",  "logo"=> "logo_igpdrome.png"
    ),
    "gard" => array (
        "title" => "Federation Gardoise des Vins à IGP",
        "adresse" => "Le Solaris<br/>545, chemin du Chai<br/>30900 NIMES",
        "contact" => "04 66 06 39 22<br/>mireille.compan@odg30.fr<br/><br/><b>Contact:</b> Mireille COMPAN<br/><b>Président:</b> Denis VERDIER<br/>",
        "portail" => "http://www.innov-siqo.com/",  "logo" => "logo_igpgard.png", "plus" => "https://regardsurlevin.fr/espace-pro/"
    ),
    "pontdugard" => array (
        "title" => "IGP Coteaux du Pont du Gard",
        "adresse" => "Le Solaris<br/>545, chemin du Chai<br/>30900 NIMES",
        "contact" => "04 66 06 39 22<br/>mireille.compan@odg30.fr<br/><br/><b>Contact:</b> Mireille COMPAN<br/><b>Président:</b> Denis VERDIER<br/>",
        "portail" => "http://www.innov-siqo.com/",  "logo" => "logo_igppontdugard.png", "plus" => "https://regardsurlevin.fr/espace-pro/"
    ),
    "cevennes" => array (
        "title" => "IGP Cévennes",
        "adresse" => "Le Solaris<br/>545, chemin du Chai<br/>30900 NIMES",
        "contact" => "04 66 06 39 22<br/>mireille.compan@odg30.fr<br/><br/><b>Contact:</b> Mireille COMPAN<br/><b>Président:</b> Denis VERDIER<br/>",
        "portail" => "http://www.innov-siqo.com/",  "logo" => "logo_igpcevennes.png", "plus" => "https://regardsurlevin.fr/espace-pro/"
    ),

    "gascogne" => array (
        "title" => "Syndicat des vins Cotes de Gascogne et Gers",
        "adresse" => "Route de Cazaubon 1286, av de l′Armagnac<br/>BP 2<br/>32800 EAUZE",
        "contact" => "05.62.09.82.19<br/>alain@vins-cotes-gascogne.fr<br/><a href='http://www.vins-cotes-gascogne.fr'>Site web</a><br/><b>Contact:</b> Alain DESPRATS<br/><b>Président:</b> Jean-Pierre DRIEUX<br/>",
        "portail"=>"https://gascogne.igp.vins.24eme.fr/",  "logo"=> "logo_igpgascogne.png"
    ),
    "herault" => array (
        "title" => "Federation<br/>IGP 34",
        "adresse" => "Rond point de la Vierge Maurin BP 20006<br/><br/>34871 LATTES Cedex",
        "contact" => "04 67 07 03 26<br/>s.olivet@vignerons.com<br/><br/><b>Contact:</b> Sylvie OLIVET<br/><b>Président:</b> Jean Michel SAGNIER<br/>",
        'portail' => "https://www.innov-agro.igpvins.fr/", "logo" => "logo_igpherault.png"
    ),
    "loire" => array (
        "title" => "Syndicat des Vins IGP du Val de Loire",
        "adresse" => "6 Rue du Maine<br/><br/>49100 ANGERS",
        "contact" => "02 41 87 25 81<br/>contact@igpvaldeloire.fr<br/><a href='http://www.vinsdepays-valdeloire.com'>Site web</a><br/><b>Contact:</b> Raphaël Fattier<br/><b>Présidente:</b> Catherine Motheron",
        "portail"=>"https://loire.igp.vins.24eme.fr/",  "logo"=> "logo_igploire.png"
    ),
    "tarn" => array (
        "title" => "Syndicat des vins IGP Côtes du Tarn ",
        "adresse" => "Maison des Vins – Abbaye Saint Michel<br/><br/>81600 GAILLAC",
        "contact" => "05 63 57 15 40<br/>cotesdutarn@vins-gaillac.com<br/><a href='http://www.vins-gaillac.com'>Site web</a><br/><b>Contact:</b> Caroline Granado<br/><b>Président:</b> Cédric Carcenac",
        "portail"=>"https://teledeclaration.vins-gaillac.com/",  "logo"=> "logo_igptarn.png"
    ),
    "var" => array (
        "title" => "Syndicat des Vignerons<br/>du Var",
        "adresse" => "70 Avenue du President Wilson<br/><br/>83550 VIDAUBAN",
        "contact" => "04 94 73 54 12<br/>jrouzier.svv@orange.fr<br/><br/><b>Contact:</b> Emmanuelle RANC<br/><b>Président:</b> Eric PAUL<br/>",
        "portail"=>"https://var.igp.vins.24eme.fr/",  "logo"=> "logo_igpvar.png"
    ),
    "vaucluse" => array (
        "title" => "Syndicat des Vins IGP Vaucluse",
        "adresse" => "35 Chemin de Saint Genies<br/><br/>84210 VENASQUE",
        "contact" => "04 90 12 45 20<br/>contact@vins-igp-vaucluse.fr<br/><a href='http://www.vins-igp-vaucluse.fr'>Site web</a><br/><b>Contact:</b> Mladen GRUMIC<br/><b>Président:</b> Joel REYNAUD<br/>",
        "portail"=>"https://vaucluse.igp.vins.24eme.fr/",  "logo"=> "logo_igpvaucluse.png"
    ),
    "med" => array (
        "title" => "Fédération<br/>INTER-MED",
        "adresse" => "<br/>198 chemin des Entrages<br/>13300 SALON-DE-PROVENCE",
        "contact" => "06 22 50 73 29<br/>contact@igpmed.fr<br/><a href='http://www.igpmed.fr'>Site web</a><br/><b>Contact:</b> Axelle FICHTNER<br/><b>Président:</b> Thierry ICARD<br/>",
        "portail"=>"https://med.igp.vins.24eme.fr/", "logo"=> "logo_igpmed.png"
    ),
    "terredumidi" => array (
        "title" => "Syndicat des Producteurs de Terres du midi",
        "adresse" => "Domaine de Manse - Avenue Paysagere<br/>CS 70026 - Maurin<br/>34973 LATTES",
        "contact" => "04 67 82 19 36<br/>accueil@igpterresdumidi.fr<br/><br/><b>Contacts dossiers :</b><ul><li><b>Aude et P.O.</b> : Laurence ZORZETTIG l.zorzettig@vignerons.com 04.68.90.22.29</li><li><b>Gard : </b>Mireille COMPAN m.compan@vignerons.com 04.66.70.94.58</li><li><b>Herault :</b> Sylvie OLIVET s.olivet@vignerons.com 04 67 07 03 26</li></ul><br/><b>Président:</b> Ludovic ROUX<br/>",
        "portail" => "#", "logo" => "logo_igpterredumidi.png"
    )
);

if (!isset($odg_contacts)) {
    $odg_contacts = $igp_contacts;

    $odg_name = 'Vins IGP';
    $odg_tagline = 'Retrouver depuis cette pages les adresses de tous les portails et documents des Syndicats viticoles des IGP.';
    $odg_logo = '/images/igp.png';

    $odg_theme = 'igp';
}
