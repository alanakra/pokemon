<?php
  class Guerrier extends Personnage{
  const BONUS = 20;

  public function attaque(Personnage $perso){
   parent::attaque($perso);
   $perso->setPv($perso->getPv() - self::BONUS);
  }
 }
?>