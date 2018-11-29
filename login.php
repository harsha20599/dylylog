<!DOCTYPE html>
<html>
<head>
  <title>harsha20599</title>

      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
       <link rel="stylesheet" type="text/css" href="style2.css">


</head>
<body>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <?php
    session_start();      
    $_SESSION['userid'] = "something";
    $_SESSION['password'] = "something";

  ?>


  <nav class="z-depth-0">
    <div class="nav-wrapper white">
      <!-- <span><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="color: black;">menu</i></a></span> -->
      <a href="#" class="brand-logo "><img src="logo.png" height="50px" style="padding-top: 10px;"></a>
      <!-- <ul id="nav-mobile " class="right hide-on-med-and-down">
        <li><a href="view.php" class="black-text"><i class="material-icons left">remove_red_eye</i>View</a></li>
        <li><a href="index.html" class="black-text"><i class="material-icons left">border_color</i>Insert</a></li>
      </ul> -->
    </div>
  </nav>
  <!-- <ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
      <br>
      <a href="https://plus.google.com/+harsha20599"><img class="circle" src="profile.jpg"></a><p></p>
      <ul class="profileview">
      	<li><a href="https://plus.google.com/+harsha20599"><span class="white-text name">Harsha Vardhan</span></a></li>
      	<li><a href="#"><span class="white-text email">harsha20599@gmail.com</span></a></li>
      </ul>
    </div></div></li>
    <li><a href="view.php">View</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Social Media</a></li>
      			<li><a href="https://www.facebook.com/harsha20599">Facebook</a></li>
                <li><a href="https://www.youtube.com/harsha20599">Youtube</a></li>
                <li><a href="https://www.instagram.com/harsha_20599">Instagram</a></li>
                <li><a href="https://www.tiwtter.com/harsha20599">Twitter</a></li>
  </ul> -->

<script type="text/javascript">
  function btnsignup()
  {
    window.location = "localhost/signup.php"
  }
  function btnsubmit(){
    document.getElementById('sub').submit();
  }
</script>
  <div class="row" style="padding: 0px 10px 0px 10px;">

    <div class="col s12 m4 offset-m4">
      <center><h3 style="font-weight: 300;color: #616161;">Login Here</h3></center>
    </div>
    <div class="card-panel col s12 m4 offset-m4 z-depth-0" style="padding: 20px 40px 40px 40px; ">
      <form action="index.php" method="POST" id="sub">  
        <div class="input-field">
            <input id="username" type= "text" class="validate" name="username">
            <label for="last_name">Username</label>
        </div>
        <div class="input-field">
            <input id="password" type= "password" class="validate" name="password">
            <label for="last_name">password</label>
        </div>
        <p class="center" style="color: red;"> 
        <?php 
          $err = isset( $_GET['error'] ) ? $_GET['error'] : "nothing"; 
          if($err == '1'){ echo "Ivalid username or password"; }
          ?>
        </p>
        <button class="btn waves-effect waves-light blue z-depth-0" onclick="btnsubmit();" style="width: 100%;margin-top: 10px;">Login</button>
        <!-- <button class="btn waves-effect waves-light pink z-depth-0" onclick="btnsignup();" style="width: 100%;margin-top: 20px;">Sign Up</button> -->
        <a href="signup.php"> <h6 class="center waves-effect waves-light " style="padding: 10px 5px 10px 5px;background-color:  pink; width: 100%;color: white;">SIGNUP</h6> </a>
      </form>
    </div>
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