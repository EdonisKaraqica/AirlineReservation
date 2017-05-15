<?php  ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="login.css">
<style>
ul {
    list-style-type: none;
    width:100%;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
   
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    width:auto;
    height: auto;
}

li a:hover {
    background-color: #3c3c3c;
    height: auto;
}
#menu {float: left;border-style: solid;width: 100%;position: relative; }

.foto_icon{width:3%;position: absolute;}

.title{padding-left: 4%; width:10%;height:50px;position: fixed; top :4%;}

.menu_f{width:34%;position: fixed; left:66%;}


</style>
</head>
<body style="z-index:-1;">

<div id="menu">
	<div class="foto_icon">
		<img src="http://www.clipartbest.com/cliparts/aTq/zgA/aTqzgAzXc.png" alt="Mountain View" style="width:50px;height:50px;margin:10px">

	</div>

	<div class ="title">
		KosovaAir 
	</div>

	<div class="menu_f">

	<ul>
  		<li><a class="active" href="home.php">Home</a></li>
  		<li><a href="info.php">Info</a></li>
  		<li><a href="#contact">Rezervimet</a></li>
  		<li><a href="orari_fluturimeve.php">Orari i fluturimeve</a></li>
  		<li>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal"  >
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="http://www.clipartbest.com/cliparts/aTq/zgA/aTqzgAzXc.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Kyçu</button>
	  <button type="submit">Regjistrohu</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"  > <a href="#" style="color:black;display:block;" class="a" >Forgot</a></span>
    </div>
  </form>
</div></li>

	</ul>

	</div>

</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
