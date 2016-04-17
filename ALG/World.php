<?php

$ar=$_GET['v'];

function divide (array $ar){
      $size=count($ar);
      $left=array_slice($ar,0,ceil($size/2)-1);
      $right=array_diff($ar,$left);

      if(size==1) { return $ar; }
      else { 
            return $right;  }
}

print_r(divide($ar));

