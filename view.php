<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <style type="text/css">
          body{
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
          }
           
        
          .collapsible{
            background-color: #03A9F4;

          }
          .brand-logo{
            margin-left: 10px;
          }
          .background{
            background: url('cover (2).jpg');
          }
          .profileview li{
            margin: -25px 0px 0px 0px;
          }
          .circle{
            margin-left: 10px;
          }



       		.collapsible-body{
       			background-color: #fff;
       		}
       		.something{
       			margin: 0px 10px 0px 10px;
       		}
       		.data{
       			padding: 5px;
       			color: white;
       		}
       		
       </style>
</head>
<body>

      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>



  <nav class="z-depth-0">
    <div class="nav-wrapper white">
      <span><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="color: black;">menu</i></a></span>
      <a href="#" class="brand-logo "><img src="logo.png" height="50px" style="padding-top: 10px;"></a>
      <ul id="nav-mobile " class="right hide-on-med-and-down">
        <li><a href="index.php" class="black-text"><i class="material-icons left">border_color</i>Insert</a></li>
      </ul>
    </div>
  </nav>
  <ul id="slide-out" class="side-nav">
    
    <li><a href="index.php">Insert</a></li>
  </ul>

  <div class="something ">
	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "log";
      session_start();
      $user = $_SESSION['userid'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			} 
		 
		$result = mysqli_query($conn,"SELECT * FROM usr_$user");
		 
		
		 
		while($row = mysqli_fetch_array($result))
		{
		  echo '<ul class="collapsible z-depth-0" data-collapsible="accordion"><li>';
		  echo  '<span class="data">'. $row['date'].'</span>';
		  echo '<div class="collapsible-header">'  ;
		  echo  '<strong>'.$row['title'] . '</strong>'."</div>";
		  echo '<div class="collapsible-body"><p>' . $row['data'] . "</div>";
		  echo "</li></ul>";
		 };
		 
		$conn->close();
	?>
</div>
<script type="text/javascript">
	$('.button-collapse').sideNav({
	      menuWidth: 300, // Default is 300
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true, // Choose whether you can drag to open on touch screens,
	      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
	      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
	    }
	  );
	  </script>
      
</body>
</html>