<?php
class cupCake{
   public $type = array("Chocolate", "Rainbow", "Mocha", "Vanilla");
   public $price = array(3, 4, 5);
   public $stock = array(10,15,20);//check if we have cupcake in stock;
public $tax= 7;
public $discount = 5;// final price more than $20 get 5% off
//private no one can see this info--we need to decide what people can see and not see

//step 1 next get function means what developer want people to see and chose--get need return

function getType(){
   return $this->type;

}
function getDiscount(){
   return $this->discount;
}
//we return only price of that flavour that user search
function getPrice($flavour){
   //loop will search that flavour exist or not -1 is not found
  $position = -1 ;
  echo $position;
  echo count($this->type);
  for($i=0; $i<count($this->type); $i++){
   //check if flavour is found in that type
   if($flavour==$this->type[$i]){
      $position=$i;
      break;
   }
}

//done with loop next if else
   //below if position can not found that type of cupcake is -1
   //if loop found we go if else and return the price if not found return 0
   if($position != -1){
return $this->price[$position];
   }
   else{
return 0;
   }

  
}


}




?>