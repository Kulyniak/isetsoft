<?php
try{
    $con  = new mysqli('localhost', 'root', '', 'isetsoft');
} catch(Exception $e){
    echo "Failed to connect ".$e;
}


