<?php
 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 echo "Nuk eksiston";
 }
function getFlightsGO() { 
   require 'db.php'; 
       //$nisja=$_POST;

         $DataRez=$_POST['dita_nisjes'];
         $Dite_PlusMinus1=(int)$_POST['Ndite1'];
         $DataKthimit=$_POST['dita_nisjes'];
         $Destinacioni=$_POST['toplace'];
         $VendiNisjes=$_POST['fromplace'];
         

  $dm=pg_query($db,"SELECT  date '$DataRez' - integer '$Dite_PlusMinus1'");
  $ditaminus=pg_fetch_result($dm, 0, 0);
  $dp=pg_query($db,"SELECT  date '$DataRez' + integer '$Dite_PlusMinus1'");
  $ditaplus=pg_fetch_result($dp, 0, 0);


if($ditaplus !=null && $ditaminus!=null)
{
   $result = pg_query($db,"SELECT * FROM  flights where (departuredate between '$ditaminus' and '$ditaplus' ) and placeto='$Destinacioni'and placefrom='$VendiNisjes' ;");
 



      $a=pg_fetch_all($result);     
      print_r(json_encode($a));      
} 
else
{print_r(0);}   
} 

 function bookFlight(){

   require 'db.php';


        $id_user = 1; // me sesion me ba DONI

         

        $id_flights1 =  pg_escape_string($_POST['id1']);   
        $id_flights2 =  pg_escape_string($_POST['id2']); 
        $optionpay="cash";
      
         if($id_flights1!=0)
         {
      
        $seatnumber=(pg_query($db, "SELECT count(*) from  reservations where id_flights=$id_flights1 "));
        $a=pg_fetch_result($seatnumber, 0, 0);
        $seat= $a+1;

      
        $result = pg_query($db, "INSERT INTO reservations(id_user, id_flights,optionpay,seatreserved)
                                 VALUES ($id_user, $id_flights1 , '$optionpay',$seat);");
        }
        else print_r(0);


        if($id_flights2!=0){
           $seatnumber2=(pg_query($db, "SELECT count(*) from  reservations where id_flights=$id_flights2 "));
        $a2=pg_fetch_result($seatnumber2, 0, 0);
        $seat2= $a2+1;


        $result2 = pg_query($db, "INSERT INTO reservations(id_user, id_flights,optionpay,seatreserved)
                                 VALUES ($id_user, $id_flights2 , '$optionpay',$seat);");

        }

 }
 function getFlightsRETURN(){
       require 'db.php'; 
 
         $Dite_PlusMinus=$_POST['Kdite'];
         $DataKthimit=$_POST['dita_kthimit'];
         $Destinacioni=$_POST['toplace'];
         $VendiNisjes=$_POST['fromplace'];
         
        $dm=pg_query($db,"SELECT  date '$DataKthimit' - integer '$Dite_PlusMinus'");
        $ditaminus=pg_fetch_result($dm, 0, 0);
        $dp=pg_query($db,"SELECT  date '$DataKthimit' + integer '$Dite_PlusMinus'");
        $ditaplus=pg_fetch_result($dp, 0, 0);

         $result = pg_query($db, "SELECT * FROM  flights where (departuredate between '$ditaminus' and '$ditaplus') and placeto='$VendiNisjes' and placefrom='$Destinacioni'
                   ;");
       $a=pg_fetch_all($result);
                              
      //       }
      //       else{
                 
                // }
            print_r(json_encode($a));    


 }

?>