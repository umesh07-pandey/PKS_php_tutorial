<?php
class overloadingExample{
  public function __call($function_name,$argumentList){
   $fun= $function_name;
   if($fun=="add" ){
    $countListOfArgument = count($argumentList);
    if($countListOfArgument==2){
      echo "the sum of this is".  $argumentList[0]+$argumentList[1];

    }
    if($countListOfArgument==3){
      echo "the sum of this is". $argumentList[0]+$argumentList[1]+$argumentList[2];
    }
   }
  }
}
$obj=new overloadingExample();
$obj->add(3,4,5);



?>