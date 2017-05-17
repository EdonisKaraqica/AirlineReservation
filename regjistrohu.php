<?php 
require("header.php");

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
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Emri:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Sheno emrin" name="email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Mbiemri:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Sheno mbiemrin" name="email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Adresa:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Sheno adresen" name="email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">E-mail:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Sheno e-mail" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
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
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
