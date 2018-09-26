<!DOCTYPE html>
<html>
    <head>
      <script src="myscript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="jquery-1.8.3.min.js"></script>
		<script src="jquery.elevateZoom-3.0.8.min.js"></script>
      <title>Event</title>
      <link rel="stylesheet" type="text/css" href="style.css" />
      <link rel="icon" href="img/icon.ico">
    </head>
    <body>
      <div id="navbar">
          <ul>
            <li><a style="margin-right: 0px;" id="navbtn" onclick="openNav()" style="width: 50px;"> ACCOUNT </a></li>
            <li><a class="<?php echo $activeHome; ?>" href="index.php">HOME</a></li>
            <li><a class="<?php echo $activeVisit; ?>" href="visit.php">VISIT US</a></li>
            <li><a class="<?php echo $activeContact; ?>" href="contact.php">CONTACT</a></li>
              <ul>
                  <?php
				  session_start();
                  if(isset($_SESSION['id'])){
				      echo '<li id="loginstatus"><p>Hello, ';
                      echo "{$_SESSION['username']}";
                  } else{
                      echo '<li id="loginstatus"><p>Please log in or register</p></li>';
                  }
                  ?>
              </ul>
          </ul>
      </div>
      <div id="main">
        <div id="sidenav" class="sidenav">
          <a class="closebtn" onclick="closeNav()">CLOSE</a>
            <?php
            if(isset($_SESSION['id'])){
                echo '<a href="logout.php">Logout</a>';
                echo '<a href="premiumcontent.php">Registration for ticket</a>';
            } else {
                echo '<a href="register.php">Register</a>';
                echo '<a href="loginsite.php">Login</a>';
            }
            ?>
        </div>
            <?php echo $content; ?>
        </div>
        <div id="footer">
        <ul>
            <li>Email: <a href="contact.html">Kabzar,Vladimir  v.kabzar@fontys.nl</a> | </li>
            <li>Phone: 0623315642 | </li>
            <li>from Monday to Friday from 09 a.m. till 6 p.m.</li>
        </ul>
        </div>

    </body>
</html>
