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


  <nav class="z-depth-0">
    <div class="nav-wrapper white">
      
      <a href="#" class="brand-logo "><img src="logo.png" height="50px" style="padding-top: 10px;"></a>
    </div>
  </nav>

<script type="text/javascript">
  function btnsubmit(){
    document.getElementById('sub').submit();
  }
</script>
  <div class="row" style="padding: 0px 10px 0px 10px;">

    <div class="col s12 m4 offset-m4">
      <center><h3 style="font-weight: 300;color: #616161;">Register</h3></center>
    </div>
    <div class="card-panel col s12 m4 offset-m4 z-depth-0" style="padding: 20px 40px 40px 40px; ">
      <form action="signup_register.php" method="POST" id="sub">  
        <div class="input-field">
            <input id="username" type= "text" class="validate" name="username">
            <label for="last_name">Username</label>
        </div>
        <div class="input-field">
            <input id="username" type= "text" class="validate" name="fullname">
            <label for="last_name">Fullname</label>
        </div>
        <div class="input-field">
            <input id="username" type= "text" class="validate" name="email">
            <label for="last_name">Email</label>
        </div>
        <div class="input-field">
            <input id="username" type= "text" class="validate" name="phone">
            <label for="last_name">Phone</label>
        </div>
        <div class="input-field">
            <input id="password" type= "password" class="validate" name="password">
            <label for="last_name">Create Password</label>
        </div>
        
        <button class="btn waves-effect waves-light blue z-depth-0" onclick="btnsubmit();" style="width: 100%;margin-top: 10px;">Register</button>
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