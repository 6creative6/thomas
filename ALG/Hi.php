<?php
ini_set('memory_limit','2000M');

$ar=$_GET['v'];

function divide (array $ar){
      $size=count($ar);
      $left=array_slice($ar,0,ceil($size/2)-1);
      $right=array_diff($ar,$left);
      return merge($left,$right);  
}

function merge (array $left, array $right){
      // $left_1=array_slice($left,1);
      // $right_1=array_slice($right,1);
      // $results=array();

       if(count($left)==1 && count($right)==1){
               if($left[0]>$right[0]){
                    return array_merge($right,$left);
               }
               if($left[0]<$right[0]){
                    return array_merge($left,$right);
               }
       }
       else if(count($left)>1 || count($right)>1) {
            if(count($left)!=1){
                  $left_1=divide($left);
            }
            else $left_1=$left;
            if(count($right)!=1){
                  $right_1=divide($right);
            }
            else $right_1=$right;
            
            if($left_1[0]>$right_1[0]){
                  return array_unshift($right_1[0],merge($left_1,array_slice($right_1,1)));
            }
            if($left_1[0]<$right_1[0]){
                   return array_unshift($left_1[0],merge($right_1,array_slice($left_1,1)));
            }
       }
       else if(count($right)==0 || count($left)==0){
            if(count($left)==0){
                  return array_merge($left,$right);
            }
            if(count($right)==0){
                  return array_merge($right,$left);
            }
       }
      
}

print_r(divide($ar));

