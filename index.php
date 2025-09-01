<?php
if (strpos($_SERVER['HTTP_HOST'], 'igp') !== false ) {
	include('igp.php');
}elseif(strpos($_SERVER['HTTP_HOST'], 'gaillac') !== false ) {
        include('gaillac.php');
}
