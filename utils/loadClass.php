<?php


    function    loadClass($classe) {
        require_once 'entity/'. $classe. '.php';
    }

    spl_autoload_register('loadClass');

?>