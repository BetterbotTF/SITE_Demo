<?php
	
	require 'steamauth/steamauth.php';

	if(isset($_SESSION['steamid'])){
			$id = $_SESSION['steamid'];
	}
	else
	{

	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Market Warehouse Bots</title>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	background-color: #00FFFF
}

.dropdown:hover .dropdown-content {
    display: block;
}
.Log {
	float: right;
}
	
</style>
</head>
<body>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">SteamBot News</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">About Us</a>
    <div class="dropdown-content">
      <a href="#">Our Steam Group</a>
      <a href="#">Our GitHub Page</a>
      <a href="#">Our Facebook Page</a>
    </div>
  </li>
    <?
	if(!isset($_SESSION['steamid'])) {
		
	}  
	else 
	{
	require ('steamauth/userInfo.php');
	?>
   
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Trading</a>
    <div class="dropdown-content">
      <a href="#">Steam</a>
      <a href="#">CS:GO</a>
      <a href="#">TF2</a>
    </div>
  </li>
  <li><a href="#">Buy a Steam Bot</a></li>
  	<?
	} 
	?>
	<p class="Log"><?php echo (isset($_SESSION['steamid'])) ? logoutbutton() : loginbutton("rectangle"); ?></p>
</ul>
</body>
</html>