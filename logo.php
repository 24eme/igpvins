<?php
include('config/config.php');
$service = preg_replace('/https?:../', '', $_GET['service']);
$service = preg_replace('/\/.*/', '', $service);
if (isset($alternative_domains[$service])) {
    $service = $alternative_domains[$service];
}
$region = array_shift(explode('.', $service ));
$region = preg_replace('/[^0-9a-z]/', '', $region);
if ($region == 'viticonnect') {
        $region = str_replace('igp', '', strtolower(array_pop(explode('/', $_GET['service']))));
}
if (!$region) {
	$region = 'confederation';
}
header('Location: /images/logos/logo_igp'.$region.'.png');
