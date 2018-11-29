
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
       <!-- <script src="js/jquery-3.2.1.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
  <?php 
    session_start();      
    $usr = isset( $_POST['username'] ) ? addslashes($_POST['username']) : $_SESSION['userid'] ;
    $pas = isset( $_POST['password'] ) ? addslashes($_POST['password']) : $_SESSION['password'];
    $_SESSION['password'] = $pas;
    // $usr = $_GET['username'] || "something";
    // $pas = $_GET['password'] || "something";
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "log";
      $heading="";
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$usr' AND password = '$pas'");
      while($row = mysqli_fetch_array($result))
       {
          // $user=$row['username'];
          $user = isset( $row['username'] ) ? $row['username'] : "null username" ;

          $_SESSION['userid'] = $user;
          $heading= $row['name'];
      };
      if(isset( $user))
      {
        echo "";
      }
      else{
        header('Location: login.php?error=1');
      }
     
      $conn->close();
      if($usr == "something")
      {
        header('Location: login.php?error=0');
      }
      ?>

      <script type="text/javascript" src="js/materialize.min.js"></script>


  <nav class="z-depth-0">
    <div class="nav-wrapper white">
      <span><a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons" style="color: black;">menu</i></a></span>
      <a href="#" class="brand-logo "><img src="logo.png" height="50px" style="padding-top: 10px;"></a>
      <ul id="nav-mobile " class="right hide-on-med-and-down">
        <li><!-- 
          <form action="view.php" method="POST">
            <input type="hidden" name="sessioninterval" value="<?php echo $user; ?>">
            <input type="submit"><i class="material-icons left">remove_red_eye</i>View</li></form> -->
        <li><a href="view.php" class="black-text"><i class="material-icons left">remove_red_eye</i>View</a></li>
      </ul>
    </div>
  </nav>
  <ul id="slide-out" class="side-nav">
    
    <li><a href="view.php">View</a></li>
  </ul>
    <center>
        <h4 style="font-weight: 300;">Hello, <?php echo $heading ?></h4>
      <div class="row" style="padding: 0px 10px 0px 10px;">
        <div class="grid-example col s12 m6 offset-m3 card-panel z-depth-0">
          <div class="date col s12 m12">
            <h3><script> document.write(new Date().toDateString()); </script></h3>
          </div>
          <div class="form ">
            <form class="formo" action="register.php" method="GET" id="forumInput">
              <input type="hidden"  name="user" value="<?php echo $user ?>">
              <div class="input-field col s12">
                <input id="title" type= "text" class="validate" name="title" >
                <input id="user" type= "hidden" name="user" value="<?php echo $user; ?>" >
                <label for="last_name">What have you done today ?</label>
              </div>
              <div class="input-field col s12">
                <textarea id="data" class="materialize-textarea" name="description"></textarea>
                <label for="textarea1">Have time ? describe it !</label>
              </div>
              <button class="btn waves-effect waves-light purple z-depth-0" type="submit" style="margin-bottom: 15px;width: 100%;">Submit</button>
              <h6 id="result"></h6>
              <a href="logout.php" >logout</a>
            </form>
          </div>
        </div>
      </div>
    </center>
    
        <script type="text/javascript" >
          $("#forumInput").submit(function(event){

              event.preventDefault();
              var $form = $(this);

              var $inputs = $form.find("input, select, button, textarea");

              var serializedData = $form.serialize();

              $inputs.prop("disabled", true);

              request = $.ajax({
                  url: "register2.php",
                  type: "post",
                  data: serializedData
              });

              request.done(function (response, textStatus, jqXHR){
                  console.log("Hooray, it worked!");
                  $("#result").html("Submitted Sucessfully");
              });

              request.fail(function (jqXHR, textStatus, errorThrown){
                  console.error(
                      "The following error occurred: "+
                      textStatus, errorThrown
                  );
              });

              request.always(function () {
                  $inputs.prop("disabled", false);
              });

          });
        </script>
  <script type="text/javascript">
   $('.button-collapse').sideNav({
        menuWidth: 300, 
        edge: 'left', 
        closeOnClick: true, 
        draggable: true, 
        onOpen: function(el) {  }, 
        onClose: function(el) {  }, 
      }
    );
  </script>
      
</body>
</html>