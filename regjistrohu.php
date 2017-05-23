<?php 
require("header.php");
require("db.php");
?>
<?php




if(isset($_POST['submit'])){
  $username=$_POST['username'];
  $emri=$_POST['emri'];
  $mbiemri=$_POST['mbiemri'];
  $adresa=$_POST['adresa'];
  $email=$_POST['email'];
  $fjalekalimi=$_POST['fjalekalimi'];
  $k_fjalekalimin=$_POST['k_fjalekalimin'];



  $query = "INSERT INTO shfrytezuesit(
  username, emri, mbiemri, adresa, email, fjalekalimi)
  VALUES ('$username','$emri' ,'$mbiemri' ,'$adresa' ,'$email' ,'$fjalekalimi' );"; 
$result = pg_query($query);   

if ($result) {
  echo "True";
}
else {
  echo "false";
}


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("header.html");
});
</script> 
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div id="header">
</div>

<div class="container">
  <h2>Regjistrimi</h2>
  <form class="form-horizontal" method="post" action="regjistrohu.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Sheno username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" >Emri:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Sheno emrin" name="emri">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" >Mbiemri:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Sheno mbiemrin" name="mbiemri">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" >Adresa:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Sheno adresen" name="adresa">
      </div>
    </div>
  <div class="form-group">
      <label class="control-label col-sm-2" >E-mail:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Sheno e-mail" name="email">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" >Fjalekalimi:</label>
      <div class="col-sm-10">
        <input  class="form-control" id="email" placeholder="Sheno fjalekalimin" name="fjalekalimi">
      </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" >Konfirmo Fjalekalimi:</label>
      <div class="col-sm-10">
        <input class="form-control" id="email" placeholder="Konfirmo fjalekalimin" name="k_fjalekalimin">
      </div>
  </div>
    

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="submit">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
