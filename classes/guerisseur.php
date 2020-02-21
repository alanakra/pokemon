<?php
 //t)
 class Guerisseur extends Personnage{

  const MAXLIFE=200;
  //  public function regenerer($pv){
  //   $this->pv+=$pv;
  //  } 
  public function regenerer(int $x =null){
   if (is_null($x)){
     $this->pv=parent::MAXLIFE;
   }else{
     $this->setPv($this->getPv()+$x);
   }
  } 
}
?>