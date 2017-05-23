<?php

require_once("db.php");


$username=$_POST['username'];
$psw=$_POST['psw'];

$sql="select * from admin where pasword='$username' and users='$psw'";

$ret = pg_query($db, $sql);

$result=pg_fetch_all($ret);

if(!$result) {
      echo "Gabim ne logim";
   } else {
      echo "Ju jeni kycur me sukses\n";
   }

// $sql="SELECT * FROM admin";
// $ret = pg_query($db, $sql);
// $result=pg_fetch_all($ret);
// print_r ($result);



   pg_close($db);


?>