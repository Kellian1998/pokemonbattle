
<?php

class Pokemon{

    private $name;
    private $vie;
    private $atak;
    private $avatar;
  
   
    

    public function __construct($nameParam, $vieParam, $atakParam, $avatarParam){
        $this->name = $nameParam;
        $this->vie = $vieParam;
        $this->atak = $atakParam;
        $this->avatar = $avatarParam;

    }

    public function getName(){
        return $this->name; 
        return $this->name2; 
    }


    public function getvie(){
        return $this->vie; 
    }

    public function getAtak(){
        return $this->atak;
    }

    public function getAvatar(){
        return $this->avatar;
    }

    public function regenerer(){

        $this->vie = 100;

    }
  /*   public function getRemaininglife(){
        return (int) ((7 - $this->life));
    }
   
    public function setRemaininglife($lostLife){

        //$this->life = $thisLife + $lostLife;
        $this->life += $lostLife;


    } */
  
}