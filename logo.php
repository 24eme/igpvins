<?php
$region = array_shift(explode('.', preg_replace('/https.../', '', $_GET['service']) ));
$region = preg_replace('/[^0-9a-z]/', '', $region);
header('Location: /images/logos/logo_igp'.$region.'.png');
