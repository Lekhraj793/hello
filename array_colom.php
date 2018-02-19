<?php

 $a= array(
       0 =>array('shop_id'=> 1, 'total' => 1,),
       1 =>array('shop_id'=> 3, 'total' => 9,),
       2 =>array('shop_id' => 2, 'total' => 16,),
      ) ;
 

 $colomn = array_column($arr, 'shop_id', 'total');

 // $flip=array_flip($colomn);
 print_r($flip);

 ?>