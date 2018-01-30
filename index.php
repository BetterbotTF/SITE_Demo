<?php
	
	require 'steamauth/steamauth.php';

	if(isset($_SESSION['steamid'])){
			$id = $_SESSION['steamid'];
			$Credits = 0;
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
p.AcountInfo {
	float: right;
	background-color:Red;
}
.AccntName{
	float: right;
	background-color:Red;
}
.Accntavatar{
	float: right;
	background-color:Red;
}
.AccntCredits{
float: right;
	background-color:Red;
}

</style>

</head>
<body>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">SteamBot News</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact Us</a>
    <div class="dropdown-content">
      <a href="http://steamcommunity.com/groups/BBotTF">Our Steam Group</a>
      <a href="https://github.com/BetterbotTF">Our GitHub Page</a>
      <a href="https://www.facebook.com/groups/381502745654327/">Our Facebook Page</a>
    </div>
  </li>
    <?php
	if(!isset($_SESSION['steamid'])) {
		
	}  
	else if(isset($_SESSION['steamid']))
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
  <p class="AcountInfo"><div class="AccntName"><?php 
  echo $steamprofile['personaname']?> </div><br><div class="Accntavatar"><?php $steamprofile['avatar']?></div><br><div class="AccntCredits"><?php echo  "Credits Beta".$Credits?> </div></p>
	<?php
	} 
	?>
	<p class="Log"><?php echo (isset($_SESSION['steamid'])) ? logoutbutton() : loginbutton("rectangle"); ?></p>
</ul>
<div><a href="https://github.com/orgs/BetterbotTF/"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/github_circle_black-32.png" alt="Github" width="35" height="35"/></a><a href="http://steamcommunity.com/groups/BBotTF"><img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/steam-32.png" alt="Steam" width="35" height="35"/></a><a href="https://www.facebook.com/groups/381502745654327/"><img src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/facebook-32.png" alt="Facebook" width="35" height="35"/></a>


</div>
<h1>Hello World</h1>

             

</body>
</html>