
 <?php
  $n=3;
  echo" \n---------------------\n";
    for($i=1;$i<=$n;$i++)
   {
      
     for($j=1;$j<=$i;$j++)
      echo"*";
      echo "\n";
 
   }
  echo"\n-----------------------\n";
  
  for($i=$n;$i>=1;$i--)
   {
     
     
     for($j=1;$j<=$i;$j++){
	 echo"$j ";}
 echo"\n";
     
   }
   
   
   
   
     echo"\n-----------------------\n";
   
   $A=65;
  for($i=1;$i<=$n;$i++)
   {  
     for($j=1;$j<=$i;$j++)
     { echo chr($A);
      
      
      $A=$A+1;
      }echo "\n"; 
 
   }
  echo"\n-----------------------\n";
   
   ?>
   