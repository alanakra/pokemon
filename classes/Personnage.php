<?php
 class Personnage{
  //m)
  public $name;
  public $pv = 100;
  public $atk = 20;
  protected $id;
  const PV_MAX = 100;
  // r)
  const MAXLIFE = 100;
  private static $compteur=0;

  public function crier(){
   return $this->name.' crie "Vous ne passerez pas !!!"';
  }


  public function getId(){
    return $this ->id;
  }
    // n)
    public function getName(){
     return $this->name;
    }
  
    public function getPv(){
      return $this->pv;
    }
  
    public function getAtk(){
     return $this->atk;
    }

    public function setId($id){
      $this->id = $id;
    }
  
    public function setName($x){
     return $this->name=$x;
    }
        
    public function setPv($pv){
     $this->pv = $pv;
     if($pv>100){
      $this->pv = self::PV_MAX;
     }
     return $this->pv = $pv;
     
    }

    public function setAtk($atk){
     $this->atk = $atk;
    }

    public function hydrate(array $donnees){
      foreach ($donnees as $key => $value){
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)){
          $this->$method($value);
        }
      }
    }

  // public function __construct($a,$b,$c){
  //  $this-> name = $a;
  //  $this-> pv = $b;
  //  $this-> atk = $c;
  // }

  // q)
  public function __construct(array $donnees){
   self::$compteur++;
   return $this->hydrate($donnees);
  }

  public function is_alive(){
   if($this->pv == 0){
    echo "<br>".$this->name." est mort";
    return false;
   }else{
    echo "<br>".$this->name." est vivant";
    return true;
   }
  }
 
  // public function regenerer($x){
  //  $this->pv+=$x;
  // }

  public function attaque(Personnage $x){
   $x->pv -= $this->atk;
  }



  // o)
  public function niveau(){
   return "<br>".$this->getName()." attaque de ".$this->getAtk()." et a actuellement ".$this->getPv()." PV";
  }

  // r)
  public function reinitPV(){
   return "<br>".$this->setPv(self::MAXLIFE);
  }

  public static function afficheCompteur(){
    return self::$compteur;
  }
 }
?>