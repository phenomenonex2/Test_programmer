/* ------- Example 1 ------- */
<?php  
  for($i=0;$i<=5;$i++){  
    for($j=1;$j<=$i;$j++){  
      if($j<=(5-$i)){ 
        echo " "." ";      
      }else {
        echo "* ";
      }
    }  
    echo "<br>";  
   }  
?>  
