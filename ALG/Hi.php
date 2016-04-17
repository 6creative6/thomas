<?php
ini_set('memory_limit','2000M');

$ar=$_GET['v'];

function divide (array $ar){
      $size=count($ar);
      $left=array_slice($ar,0,ceil($size/2)-1);
      $right=array_diff($ar,$left);

      if(size==1) { return $ar; }
      else { merge($left,$right);  }
}

function merge (array $left, array $right){
       $left_1=array_slice($left,1);
       $right_1=array_slice($right,1);
       $results=array();

       if(count($left)==1 || count($right)==1){
               if($left[0]>$right[0] && count($left)==1){
                    $results[]=array_unshift($right[0],merge($left,$right_1));
}
               if($left[0]<$right[0] && count($left)==1){
                     $results[]=array_merge($left,$right);
}
               if($left[0]>$right[0] && count($right)==1){
                     $results=array_merge($right,$left);
}
               if($left[0]<$right[0] && count($right)==1){
                     $results=array_unshift($left[0],merge($right,$left_1));
}
}
       else if(count($left)!=1 && count($right)!=1) {
            if($left[0]>$right[0]){
                  $results=array_unshift($right[0],merge($left,$right_1));
}
            if($left[0]<$right[0]){
                   $results=array_unshift($left[0],merge($right,$left_1));
}
}
       return $results;
}

print_r(divide($ar));

