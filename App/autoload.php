<?php

spl_autoload_register(function ($nome_da_classe){
    
    echo "<br />"."Tentou dar include de : ".$nome_da_classe."<br />";

    //echo dirname(__FILE__);
    
    include '.../'.$nome_da_classe.'.php'; 
    
    
});