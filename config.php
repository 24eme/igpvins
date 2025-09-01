<?php

if (strpos($_SERVER['HTTP_HOST'], 'igp') !== false ) {
	include('config_igp.php');
}elseif(strpos($_SERVER['HTTP_HOST'], 'gaillac') !== false ) {
        include('config_gaillac.php');
}

