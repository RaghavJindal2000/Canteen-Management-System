<!DOCTYPE html>
<?php
    session_start();
//Variable Declaration
   $custid="";
   $pwd="";
   $email="";

   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'canteenmgmt');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>VIT Canteen</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,600,700"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    

</head>

  <body>

    <div class="mycontainer">
    <section id="mysection">
    <section id="section0">
        <div class="myrow">
          
          <div class="column1">
              <img id="loginimg" src="images/undraw2.png" />
          </div>
  
          <div class="column2">
                     <div class="content2">
                    <h1>Signup</h1>
                    <div class="card">
                        <nav class="nav-extended btncolor">
                            
                            <div class="nav-content ">
                              <ul class="tabs tabs-transparent">
                                <li class="tab"><a class="active">Customer</a></li>
                              </ul>
                            </div>
                          </nav>
                          <div id="test1" class="col s12">
                            <div>&nbsp;</div>
                              <div class="row">
                                  <form class="col s12" method="POST" action = "<?php $_PHP_SELF ?>" enctype='multipart/form-data'>
                                  <?php
                                    if (isset($_POST['Signup'])) 
                                    {
                                        $custid = mysqli_real_escape_string($db,$_POST['custid']);
                                        $pwd = mysqli_real_escape_string($db,$_POST['pwd']);
                                        $email=mysqli_real_escape_string($db,$_POST['email']);

                                        $sql = "INSERT into sauth(custid,pwd,email) values ('$custid','$pwd','$email')";
                                        $retval = mysqli_query($db, $sql);
                                    }
                                    ?>
                                    <div class="row" style="margin-bottom:0px;">
                                      <div class="input-field col s6 offset-s3">
                                        <input id="custid" type="text" class="validate" name="custid" value="<?php echo $custid; ?>" required>
                                        <label for="custid">Username(Reg No.)</label>
                                      </div>
                                    </div>
                                    <div class="row" style="margin-bottom:0px;">
                                        <div class="input-field col s6 offset-s3">
                                          <input id="pwd" type="password" class="validate" name="pwd" value="<?php echo $pwd; ?>" required>
                                          <label for="pwd">Password</label>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom:0px;">
                                        <div class="input-field col s6 offset-s3">
                                          <input id="email" type="email" class="validate" name="email" value="<?php echo $email; ?>" required>
                                          <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <input type="submit" name="Signup" onclick="myFunction()" value="Signup" id="Signup" class="waves-effejct waves-light btn btncolor center studentlogin">
                                    <a href="customer.php"><input type="button" value="LOGIN" class="waves-effejct waves-light btn btncolor center studentlogin"></a>

                                  </form>
                                  <script>
                                  function myFunction() {
                                  alert("Sign Up Complete !!");
                                  }
                                  </script>
                                </div>                             
                          </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>

    </section>

    <div>&nbsp;</div>

  

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
    <script>

$('.mycontainer').hide(); // this or use css to hide the div
$('.big').delay(1000).fadeOut('slow');
$('.mycontainer').delay(2000).fadeIn('slow');

var sect1= document.querySelector('#section1'); 
$(document).ready(function(){
  $('.studentlogin').click(function(){
    // $('#section1').css("transform","translate(-1600px,0)");
    $('#mysection').css("transform","translate(0,-675px)");
  });
});



$(document).ready(function () {
            $('.tabs').tabs();
});
     



    </script>

</body>
</html>