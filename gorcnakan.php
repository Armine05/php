<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $zangvac=["a","b",1,5,6];     
      function arajin_tiv (array $zangvac){
        for($i=0;$i<count($zangvac); $i++){
            if(is_numeric($zangvac[$i])) return $zangvac[$i];
        }
        return "tiv chka";

      }
    // echo arajin_tiv($zangvac);
    // echo arajin_tiv("hi");
     $a="anun";
     $b="azganun anun"; 
     function stugel( string $txt1, string $txt2) :bool{
    
            $lastCharacter = substr($txt1, -1);
             return  str_contains($txt2,$lastCharacter);
      
       
       

     }
     if (stugel($a,$b)){
        echo "ayo";
     }
     else {echo "no";}
     
 

    function hashvel(string $txt1, string $txt2): int {
        return substr_count($txt2, $txt1);
    }
    $nor=[];
    function heracnel_tver(array $zangvac):array{
        $j=0;
        for($i=0;$i<count($zangvac); $i++){
            if(is_numeric($zangvac[$i])){ 
                $nor[$j]=$zangvac[$i];
                $j++;
            
            }
            
        }
        return $nor;
        
        

    }
    print_r(heracnel_tver($zangvac));

//** xxxxxxxx */
echo hashvel($a, $b);
    ?>
</body>
</html>
