 <?php

   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = AirlineReservation";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   }
   else {
   	echo "succed";
   }

   // $query = pg_query($db, "SELECT * FROM works ORDER BY id"); 

   // print $query;

  ?>