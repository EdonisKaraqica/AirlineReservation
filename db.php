 <?php

   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = AirlineReservation";
   $credentials = "user = postgres password=fiek123456";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   }

  ?>