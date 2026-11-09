<?php 
    function combinacion(array $apuesta): array {
    if (count($apuesta["combinacion"]) === 6 && $apuesta["serie"] != "") { 
        return $apuesta;
    }else{
        if(count($apuesta["combinacion"]) < 6){
            for ($i=count($apuesta["combinacion"]); $i < 6; $i++) { 
                $num= 0;
                do {
                    $num= rand(1,49);
                } while (in_array($num,$apuesta["combinacion"]));
                $apuesta["combinacion"][]= $num;
            }
        }

        if($apuesta["serie"]== ""){
            $apuesta["serie"]= rand(1,999);
        }
    }
    return $apuesta;
}

?>