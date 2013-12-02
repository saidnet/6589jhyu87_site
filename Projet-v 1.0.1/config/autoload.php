<?php
    function autoload($class)
    {
        require 'modeles/'.$class.'.class.php';
    }
    
    spl_autoload_register('autoload');
?>