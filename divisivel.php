<?php 
$numero =$_POST['numero'];
if ($numero % 10 == 0 && $numero % 5 ==0 && $numero % 2 ==0){
    echo "numero é divisível por 10, por 5 e por 2";

}else{
    echo "numero NãO É DIVISÍVEL por 10, por 5 e por 2";
}