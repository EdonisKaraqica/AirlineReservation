 <?php

 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 	echo "Nuk eksiston";
 }



 function getAdminFlights(){ 


    require 'db.php';

     $query = pg_query($db, "SELECT * FROM flights    ORDER BY  DepartureDate ,  DepartureTime ;");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}


 function getFlights(){ 


    require 'db.php';

     $query = pg_query($db, "SELECT * FROM flights
    ORDER BY  DepartureDate ,
    DepartureTime ;");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function getUsers(){ 


    require 'db.php';

     $query = pg_query($db, "SELECT * FROM users ORDER BY Id_user ");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function getReservations(){ 

    require 'db.php';

     $query = pg_query($db, " SELECT re.ID_Reservation , firstName , lastName , re.ID_Flights , PlaceFrom , PlaceTo , DepartureDate,
     DepartureTime , Seatreserved , OptionPay , priceticket
     from users as us inner join reservations as re on re.ID_User =us.ID_User
      inner join flights as fl on fl.ID_Flights = re.ID_Flights
      ORDER BY re.ID_Reservation ");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function searchBy() { 

   require 'db.php';   

         $dataType = $_POST['dataType'];
         $value = $_POST['value'];
      
      
         $query = pg_query($db, "SELECT * FROM flights 
         WHERE $dataType ILIKE '%$value%' ");
      

          $result=pg_fetch_all($query);


         print_r(json_encode($result));    
}

 function addFlight() { 

    require 'db.php';   
         $a = 1;
         $aircraftnr = pg_escape_string($_POST['aircraftnr']);
         $capacity = pg_escape_string($_POST['capacity']);
         $placefrom = pg_escape_string($_POST['placefrom']);
         $placeto = pg_escape_string($_POST['placeto']);
         $departuredate = pg_escape_string($_POST['departuredate']);
         $departuretime = pg_escape_string($_POST['departuretime']);
         $priceticket = pg_escape_string($_POST['priceticket']);

      
      if($aircraftnr!=null&&$capacity!=null &&$placefrom!=null &&$placeto!=null &&$departuredate!=null &&$departuretime!=null && $priceticket!=null) {
         $query = pg_query($db, "
          INSERT into flights (AircraftNr,Capacity,PlaceFrom,DepartureDate,DepartureTime,PlaceTo,PriceTicket)
               values ($aircraftnr,$capacity,'$placefrom','$departuredate','$departuretime','$placeto',$priceticket );");
          
           }

      else {
        $a=0;
      }
       
 

      print_r($a);

}

 function deleteFlight(){


   require 'db.php';


        


       $id_flights = $_POST['id']; 

      $result = pg_query($db, "DELETE FROM flights WHERE id_flights = $id_flights");

 }

  function deleteReservation(){


   require 'db.php';

        $id_reservation = $_POST['id']; 
      
      $result = pg_query($db, "DELETE FROM reservations WHERE id_reservation = $id_reservation");

 }

   function deleteUser(){


   require 'db.php';

        $id_user =  pg_escape_string($_POST['id']); 
      
      $result = pg_query($db, "DELETE FROM users WHERE id_user = $id_user");

 }

?>
