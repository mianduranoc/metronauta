
<?php

function validar($campo,$desc){
       
        $valor = htmlspecialchars(stripslashes(trim( $campo)));              
        if(empty($valor)){                    
           echo "<strong>Campo $desc vacio. </strong><br/>";                             
        }else{
            return $valor;
        }               
    
}
    
?>