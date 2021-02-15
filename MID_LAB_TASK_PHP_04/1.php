<?php


function rec($len,$wid){
    
    
    return $len*$wid;
    
}

function peri($len,$wid){
    
    return  2*($len+$wid);
    
}


echo " Area :".  rec(2,4)  ."\n";
echo " perimeter :". peri(2,4) ."\n";

?>