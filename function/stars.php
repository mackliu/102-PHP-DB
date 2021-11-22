<?php

//三角形星星函式
/* for($i=5;$i<12;$i=$i+2){
    stars($i);
} */

function stars($row){
    for($j=1;$j<=$row;$j++){
        
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }
        
        for($i=0;$i<(2*$j-1);$i++){
           
            echo "*";
        }
        echo "<br>";
    }
   
}

stars2('A',7);

function stars2($symbol,$row){
    for($j=1;$j<=$row;$j++){
        
        for($i=0;$i<($row-$j);$i++){
            echo "&ensp;";
        }
        
        for($i=0;$i<(2*$j-1);$i++){
           
            echo "$symbol";
        }
        echo "<br>";
    }
   
}
echo "<hr>";

$row=5;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}
$row=7;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}

$row=9;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}

$row=11;
for($j=1;$j<=$row;$j++){
        
    for($i=0;$i<($row-$j);$i++){
        echo "&ensp;";
    }
    
    for($i=0;$i<(2*$j-1);$i++){
       
        echo "*";
    }
    echo "<br>";
}
?>