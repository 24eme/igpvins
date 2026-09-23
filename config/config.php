<?php

if(strpos($_SERVER['HTTP_HOST'], 'gaillac') !== false ) {
    include('gaillac.php');
}else{
    include('igp.php');
}
