<!DOCTYPE html>
<?php
    
    include('sessioncust.php');
    require_once './vendor/autoload.php';

    use Twilio\Rest\Client;
    $uname = $_SESSION['login_user'];
    $sql = "SELECT * from customer where custid='$uname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(!isset($_POST['submit']) && !isset($_POST['verify3'])){
        $GLOBALS['random']=0;
        $_SESSION["random1"]=0;
        $GLOBALS['cost']=0;
    }
    
    $GLOBALS['output'] = 0;
    if(isset($_POST['verify3'])){
        $GLOBALS['output'] =$_POST["otp"];
    }

    
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <title>Darling Canteen</title>
    </head>
    <style>
        #successmsg{
            
            text-align: center;
            width: 400px;
            margin: 20px auto;
            padding: 10px 10px;
        }
        .success{
            color: #270;
            background-color: #DFF2BF;
        }
        .warning{
            color: #D8000C;
            background-color: #FFBABA;
        }
    </style>
    <body>
    <section class="section-plans">
            <div class="row">
                <div class="col span-10-of-12" style="display: flex;align-items: center;">
                    <img src="images/person.png" style="border-radius: 20%; width: 5vw; margin:0 10px">
                    <div style="display: inline-block; vertical-align: super"><?php echo $row['name']?><br><?php echo $row['custid']?></div>
                </div>
                <div class="col span-1-of-12"><a style="text-decoration: none; background-color: #18314f; padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="profile.php">Profile</a></div>
                <div class="col span-1-of-12"><a style="text-decoration: none; background-color: #18314f; padding: 10% 20%; color: white; vertical-align: text-bottom; margin-top: 20%; margin-bottom: 20%; box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15)" href="index.php">Logout</a></div>

            </div>
        </section>
        <section class="section-features">
        <?php
            if(isset($_POST['verify3'])){
                echo "<p id='successmsg'></p>";
            }
        ?>
            
			<div class="row">
				<h2>Get food fast &mdash; not fast food.</h2>
            <br><br><br>
				<p class="long-feat">
					Hello, We’re a part of VITFoodServices (VITFS), your new premium food-ordering-from-canteen service. We know you’re always busy. No time for standing in long queues. So let us take care of that, we’re really good at it, we promise!
				</p>
			</div>
            <br><br><br>
			<div class="row">
				<div class="col span-1-of-4 box">
					<h3>Up to 365 days/year</h3>
					<p>
						Never wait in queues again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
					</p>
				</div>
				<div class="col span-1-of-4 box">
					<h3>Ready in 30 minutes</h3>
					<p>
						You're only thirty minutes away from your delicious and super healthy meals. We work with the best chefs in each canteens to ensure that you're 100% happy.
					</p>
				</div>
				<div class="col span-1-of-4 box">
					<h3>100% organic</h3>
					<p>
						All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
					</p>
				</div>
				<div class="col span-1-of-4 box">
					<h3>Order anything</h3>
					<p>
						We don't limit your creativity, which means you can order whatever you feel like. You can choose from our menu containing over 100 delicious meals. It's up to you!
					</p>
				</div>
			</div>
		</section>
        <section class="section-cant">
            <div class="row">
                <h2>ALAcarte</h2>
            </div>
            <div class="row">
                <form method="post" id="sjt" name="sjt" action="<?php $_PHP_SELF ?>">
                <table style="font-family: 'Lato','Arial', sans-serif;">
                    <tr>
                        <td width=150><strong>Item</strong></td>
                        <td width=15><strong>Price (in Rupees)</strong></td>
                        <td width=15><strong>Quantity</strong></td>
                    </tr>
                    <?php
                        ob_start();
                        $ala = "SELECT * from dalacarte";
                        $res = mysqli_query($db,$ala);
                        while($item = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            echo "<tr><td>".$item['name']."</td><td>".$item['price']."</td><td align=\"center\"><input type=\"numeric\" class=\"btnsmall\" id=\"".$item['iid']."\" name =\"".$item['iid']."\"></td>";
                        }
                        if(isset($_POST['Submit'])){
                            $ala = "SELECT * from dalacarte";
                            $res = mysqli_query($db,$ala);
                            $_SESSION['x'] = 0;
                            while($item = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                                $it = $item['iid'];
                                $pr = $item['price'];
                                if($_POST[$it]!=NULL){
                                    $_SESSION['ord'][$_SESSION['x']]=$it;
                                    $_SESSION['pri'][$_SESSION['x']]=$pr;
                                    $_SESSION['qty'][$_SESSION['x']++]=$_POST[$it];
                                }
                            }
                            
                            $cost=0;
                            for($y=0;$y<$_SESSION['x'];$y++){
                                
                                $cost = $cost+$_SESSION['pri'][$y]* $_SESSION['qty'][$y];
                                
                            }
                            
                            $_SESSION['cost1'] =$cost;
                            $_SESSION['row1']=$row;

                            // SENDING OTP EMAIL
                            $GLOBALS['random']=rand(1000,9999);
                            $_SESSION["random1"]=$GLOBALS['random'];
                            require("./sendgrid-php/sendgrid-php.php");

                            //GET USER EMAIL ID
                            $customer = $row['custid'];
                            $sql = "SELECT email FROM sauth WHERE  custid= '$customer'";
                            $resultemail= mysqli_query($db,$sql);
                            $emailid;
                            if (mysqli_num_rows($resultemail) > 0) {
                                while($rowData = mysqli_fetch_array($resultemail)){
                                    $emailid= $rowData["email"];
                                }
                            }


                            //SENDING OTP
                            $email = new \SendGrid\Mail\Mail(); 
                            $email->setFrom("raghavjindal121000@gmail.com", "Example User");
                            $email->setSubject("OTP Verification");
                            $email->addTo(strval($emailid), "Example User");
                            // $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
                            $OTP=$GLOBALS['random'];
                            $email->addContent(
                                "text/html", "<strong> $OTP  is your One Time Password for Confirming your Order</strong>"
                            );
                            //$sendgrid = new \SendGrid('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');//ATHARVA
                            $sendgrid = new \SendGrid('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');
                            ///////////////////////////
                            //PHONE SMS- WORKING FOR VERIFIED NUMBERS   /////////
                            //GET PHONE NUMBER
                            // $customer = $row['custid'];
                            // $sql = "SELECT phone FROM customer WHERE  custid= '$customer'";
                            // $resultphone= mysqli_query($db,$sql);
                            // $phone;
                            // if (mysqli_num_rows($resultphone) > 0) {
                            //     while($rowData = mysqli_fetch_array($resultphone)){
                            //         $phone= $rowData["phone"];
                            //     }
                            // }

                            // Find your Account Sid and Auth Token at twilio.com/console
                            // DANGER! This is insecure. See http://twil.io/secure
                            // $sid    = "ACb8d591fc5d518ecfe417cf2365659a69";
                            // $token  = "058bc35e40032b1c1e689e748f4a3134";
                            // $twilio = new Client($sid, $token);
                            
                            // $message = $twilio->messages
                            //                   ->create("+91".strval($phone), 
                            //                            [
                            //                                "body" => "$OTP  is your One Time Password for Confirming your Order",
                            //                                "from" => "+12693593377"
                            //                            ]
                            //                   );
                            
                            

                            // print($message->sid);
                            
                            //////////////////////////////
                            
                            try {
                                $response = $sendgrid->send($email);
                                // print $response->statusCode() . "\n";
                                // print_r($response->headers());
                                // print $response->body() . "\n";
                            } 
                            catch (Exception $e) {
                                // echo 'Caught exception: '. $e->getMessage() ."\n";
                            }
                            

                            
                            header("Location: http://localhost/canteen/verify3.php");
                        
                        }
                    ?>
                </table>
                <div class="section-plans">
                <div class="row">
                <a style="text-decoration: none; color:#18314f;" href="homepage.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;font-family: 'Lato','Arial', sans-serif;font-weight: 300;font-size: 20px;">
                        GO BACK
                    </div>
                </a>
                <div class="col"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    <button class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(12, 10, 72, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;background-color: #18314f; color: white; font-family: 'Lato','Arial', sans-serif;font-weight: 300;font-size: 20px;" type="submit" id="Submit" name="Submit" for="sjt">
                        CONTINUE 
                    </button>
                </div>
                </div>
                </form>
                <p id="info"><?php
                                
                                if(isset($_POST['verify3'])){
                                    
                                    if($GLOBALS['output']==$_SESSION['random1']){
                                        $row=$_SESSION['row1'];
                                        if($row['wallet']>=$_SESSION['cost1']){
                                            echo "<script>alert('Order Placed!');</script>";
                                            echo "<script>
                                                 var msg=document.getElementById('successmsg');
                                                 msg.innerHTML='Order Placed</br>';   
                                                 msg.classList.add('success');                                            
                                                </script>";
                                            
                                            $date = date("Y-m-d");
                                            $cust = $row['custid'];
                                            $cost1=$_SESSION['cost1'];
                                            $add = "INSERT into ord(cid,custid,odate,cost,status) values ('919','$cust','$date','$cost1','Received')";
                                            $retval = mysqli_query($db,$add);
                                            $m = mysqli_query($db,"select max(oid) from ord");
                                            $max = mysqli_fetch_array($m,MYSQLI_ASSOC);
                                            $oid = $max['max(oid)'];
                                            for($y=0;$y<$_SESSION['x'];$y++){
                                                $ord= $_SESSION['ord'];
                                                $qty= $_SESSION['qty'];
                                                $add = "insert into orderdet values('$oid',' $ord[$y]',' $qty[$y]')";
                                                $retval = mysqli_query($db,$add);
                                            }
                                            $balance=$row['wallet']-$cost1;
                                            $add="update customer set wallet='$balance' where custid='$cust'";
                                            $retval = mysqli_query($db,$add);
                                            
                                        }
                                        else{
                                            echo "<script>alert('Not enough Balance in your wallet');</script>";
                                        }
                                    }else{
                                        echo "<script>alert('The entered OTP is invalid');</script>";
                                        echo "<script>
                                                 var msg=document.getElementById('successmsg');
                                                 msg.innerHTML='Invalid OTP</br>'; 
                                                 msg.classList.add('warning');                                          
                                                </script>";
                                    }  
                                }
                                
                            ?></p>
            </div>
        </section>
   </body>
</html>