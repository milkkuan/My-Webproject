<?php
include "doWash.php"; 


class Tshirt implements doWash{
    private $name;
    private $prize;

    public function __construct($outsidename,$outsideprize){
        $this->setName($outsidename);
        $this->setPrize($outsideprize);
    }


    public function setName($outsidename){
        $this->name = $outsidename;
        return $this->name;
    }
    public function getName(){
        return $this->name;
    }
    public function setPrize($outsideprize){
        $this->prize = $outsideprize;
        return $this->prize;
    }
    public function getPrize(){
        return $this->prize;
    }


    public function doWash(){
        return "用洗衣機清洗！";
    }

    
    public function __destruct(){
    }

}

?>