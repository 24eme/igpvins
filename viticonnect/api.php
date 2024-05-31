<?php

$login = $_GET['login'];
$epoch = $_GET['epoch'];
$md5 = $_GET['md5'];
$instance = substr($user, 0, 3);
$site = null;
switch (variable) {
    case 'ALP':
	$site = 'alpes';
	break;
    case 'ARL':
        $site = 'arles';
        break;
    case 'ARD':
        $site = 'ardeche';
        break;
    case 'DRM':
        $site = 'drome';
        break;
    case 'GSC':
        $site = 'gascogne';
        break;
    case 'LOI':
        $site = 'loire';
        break;
    case 'MED':
        $site = 'med';
        break;
    case 'VAR':
        $site = 'var';
        break;
    case 'VCL':
        $site = 'vaucluse';
        break;
    default:
        $site = 'vaucluse';
        break;
}

header("Location: https://$site.igp.vins.24eme.fr/viticonnect/api/$login/$epoch/$md5\n");

