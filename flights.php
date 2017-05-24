 <?php

 if(function_exists($_GET['f'])) {
  $_GET['f']();
 }
 else{
 	echo "Nuk eksiston";
 }

 function getFlights(){ 


    require 'db.php';

  	 $query = pg_query($db, "SELECT
  	   data_fluturimit , nisja , mberritja , airoporti , destinacioni , routecode , qmimi 
  	    FROM route as ro
		inner join qmimi_tiketave as qt on qt.id_route=ro.rtid
		inner join orari_fluturimeve as o on o.cmimi_id=qt.id_qmimi
		ORDER BY data_fluturimit ");

  	 $result=pg_fetch_all($query);


	 print_r(json_encode($result));
}

 function getAdminFlights(){ 


    require 'db.php';

     $query = pg_query($db, "SELECT
       data_fluturimit , nisja , mberritja , airoporti , destinacioni , routecode , qmimi 
        FROM route as ro
    inner join qmimi_tiketave as qt on qt.id_route=ro.rtid
    inner join orari_fluturimeve as o on o.cmimi_id=qt.id_qmimi
    ORDER BY data_fluturimit ");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function getUsers(){ 


    require 'db.php';

     $query = pg_query($db, "SELECT * FROM users ORDER BY userId ");

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function getReservations(){ 



    require 'db.php';


   $sql ="SELECT
        reservationID, username , data_fluturimit , nisja , mberritja , airoporti , destinacioni , routecode ,qmimi
     FROM route as ro
     inner join qmimi_tiketave as qt on qt.id_route = ro.rtid
     inner join orari_fluturimeve as o on o.cmimi_id=qt.id_qmimi
     inner join reservations as re on re.fluturimi = o.id_fluturimi
     inner join users as us on us.userId = re.userId
     ORDER BY reservationID ";




     $query = pg_query($db, $sql);

     $result=pg_fetch_all($query);


   print_r(json_encode($result));
}

 function insertFlights(){ 



  require 'db.php';

       $id = pg_escape_string($_POST['id']); 
       $username = pg_escape_string($_POST['username']); 
     
       $result = pg_query($db, "INSERT INTO users(id, username) VALUES('  $id  ', '  $username  ')");
}

 function searchBy() { 

   require 'db.php';   


         $dataType = $_POST['dataType'];
         $value = $_POST['value'];
      
      
         $query = pg_query($db, "SELECT
          data_fluturimit , nisja , mberritja , airoporti , destinacioni , routecode , qmimi 
         FROM route as ro
         inner join qmimi_tiketave as qt on qt.id_route=ro.rtid
         inner join orari_fluturimeve as o on o.cmimi_id=qt.id_qmimi
         WHERE $dataType LIKE '%$value%' ");
      

          $result=pg_fetch_all($query);


         print_r(json_encode($result));
       
      
}

// function searchBy(){

//   require 'db.php';

//   $dataType = pg_escape_string($_POST['dataType'])

//   $query = pg_query($db,"SELECT
//       reservationID, username , data_fluturimit , nisja , mberritja , airoporti , destinacioni , routecode ,qmimi
//     FROM route as ro
//     inner join qmimi_tiketave as qt on qt.id_route = ro.rtid
//     inner join orari_fluturimeve as o on o.cmimi_id=qt.id_qmimi
//     inner join reservations as re on re.fluturimi = o.id_fluturimi
//     inner join users as us on us.userId = re.userId
//     WHERE $dataType = $value " )
// }

?>
