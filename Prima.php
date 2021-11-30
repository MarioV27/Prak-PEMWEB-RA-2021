<!DOCTYPE html>
<html >
<title>No3</title>

<body>
    <p>Prima 1-50</p>
    <?php   
            for($i=0;$i<50;$i++){ 
                $prima=0;
                for($j=1;$j<=$i;$j++){  
                 if($i % $j == 0){ 
                        $prima++; }
                }
            if($prima == 2){ 
                echo $i."<br>" ;
             } }
    ?>
</body>
</html>