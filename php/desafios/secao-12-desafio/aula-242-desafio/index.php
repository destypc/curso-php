<?php 

class Cachorro {
    
    public $patas = 4;
    public $orelhas = 2;
    public $rabo = 1;

    function __construct($patas, $orelhas, $rabo) {
        
        $this->patas;
        $this->orelhas;
        $this->rabo;
    
    }
}

$viraLata = new Cachorro("patas", "orelhas", "rabo");

echo "O Viralata tem $viraLata->patas patas. tem $viraLata->orelhas orelhas e tem $viraLata->rabo rabo"



?>