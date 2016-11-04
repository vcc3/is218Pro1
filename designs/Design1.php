<?php
//victor Carlos Cornejo
//IS218 Design Patters
//Mini Program #1 Factory/Decorator Cars
  
  //factory portion
   class car {
    public $make;
    public $model;
    public $color;
         
   }  
     
   class carFactory {
     public static function createCar($make, $model, $color)   {
       $obj = new car;
       $obj->make  = $make;
       $obj->model = $model;
       $obj->color = $color;         
       return $obj;
     }
     
   }
   //end factory portion
   // start of decorator 
   
   class sedan{
     private $make;
     private $model;
     private $color;
   
       public function __construct($make,$model,$color)
       {
       $this->make=$make;
       $this->model=$model;
       $this->color=$color;
       }
       public function getMake()
       {
         return $this->make;
       }
       public function getModel()
       {
         return $this->model;
       }
       public function getColor()
       {
         return $this->color;
       }
       public function getAll()
       {
         return $this->getMake().' is model '.$this->getModel().'with the color of '.$this->getColor();
       }
   }
   //start of  the parent decorator
   // looking to change only the color of the car.
   class carDecorator{
   
     protected $sedan;
     protected $color;
   
       public function __construct(sedan $sedan)
       {
         $this->sedan=$sedan;
         $this->resetCar();
       }
       public function resetColor()
       {
         $this->color=$this->sedan->getColor();
       }
       public function showColor()
       {
         return $this->color;
       }
   }   
   //End of parent Decorator
   //Start of Color changer decorater
   class colorChange extends carDecorator{
     private $colordecorator;
     
     public function __construct(carDecorator $colordecorator)
     {
       $this->decorator=$colordecorator;
     }
     public function goldColor()
     {
       $this->decorator->color = " golden ".$this->decorator->color."."; 
     }
   }  
   //end of color changer
   
   
   
   
   
   
   
   
     // this is where its instantited. 
     $cars= carFactory::createCar('BMW','M4','Brown'); 
     print_r($cars);
     ///*
      echo tagins("html");
      echo tagins("head");  
      echo tagins("/head");  
      echo tagins("body")
      
      echo tagins("br").tagins("br");
     $newsedan = new sedan('BMW','M4','Brown');
     $decorate = new carDecorator($newsedan);
     $colordec = new colorChange($decorate);
     
     echo 'showing old color';
      echo $decorate->showColor();
      echo tagins("br").tagins("br");
      //
      echo "showing title after two exclaims added : "
    .tagins("br");
    $colordec->goldColor();
    $colordec->goldColor();
    echo $decorate->showColor();
    echo tagins("br").tagins("br");

     
     //  */
   
    
    
?>
    
    
    
    
    
    
    
    
    
    
    
    
 



