<?php  ?>

<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    width:480px;
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
    background-color: #111;
    height: auto;
}
#menu {float: left;border-style: solid;width: 100%;position: relative; }

.foto_icon{border-style: solid;width:40%;position: absolute;} 

.menu_f{width:50%;position: fixed; left:63%;}

</style>
</head>
<body>

<div id="menu">
<div class="foto_icon">
<img src="pic_mountain.jpg" alt="Mountain View" style="width:50px;height:50px;margin:10px">
<p>KosovaAir</p>
</div> 
<div class="menu_f">

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="info.html">Info</a></li>
  <li><a href="#contact">Rezervimet</a></li>
  <li><a href="#about">Orari i fluturimeve</a></li>
  <li><a href="#about">Login</a></li>

</ul>

</div>
</div>
</body>
</html>
