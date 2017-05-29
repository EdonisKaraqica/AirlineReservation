<?php
 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
  echo "Nuk eksiston";
 }



function getReservations() { 
   require 'db.php'; 


       //$nisja=$_POST;

        // $DataRez=$_POST['dita_nisjes'];
         //$Dite_PlusMinus=$_POST[''];

      $result = pg_query($db, "SELECT *
                   FROM  flights 
                    ;");
      $a=pg_fetch_all($result);
     
          print_r(json_encode($a));


         
    
}

?>