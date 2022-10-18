<?php 
$Numero =$_POST['numero'];
if ($Numero % 10 == 0 && $Numero % 5 ==0 && $Numero % 2 ==0){
    echo "Número é divisível por 10, por 5 e por 2";

}else{
    echo "Número NãO É DIVISÍVEL por 10, por 5 e por 2";
}
