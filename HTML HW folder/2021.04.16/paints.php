<?php
include "clothes.php";

class Paint extends Tshirt {
    protected $length;
    protected $waist;

    public function __construct($outsideName,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsideName,$outsidePrize);
        $this->setName($outsideName);
        $this->setPrize($outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsideWaist;
    }
    
    public function setName($outsideName){
        $this->name = $outsideName;
        return $this->name;
    }
    public function getName(){
        return $this->name;
    }

    public function setPrize($outsidePrize){
        $this->Prize = $outsidePrize;
        return $this->Prize;
    }
    public function getPrize(){
        return $this->Prize;
    }


    public function getLength(){
        return $this->length;
    }
    public function getWaist(){
        return $this->waist;
    }


    public function doWash(){
        $string = "用手洗！再".parent::doWash();
        return $string;
        //return "用手洗";
    }
    public function __destruct(){
    }

}
?>