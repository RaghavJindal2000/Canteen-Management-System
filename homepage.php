<!DOCTYPE html>
<?php 
    include('sessioncust.php');
    $uname = $_SESSION['login_user'];
    $sql = "SELECT * from customer where custid='$uname'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <title>Student</title>
        <style>
        .warning{
            color: #D8000C;
            background-color: #FFBABA;
            
        }
        .direction {
            transform: scale(0.95);
            color: #18314f;
            transition: transform 0.5s,  color 0.5s, background-color 0.5s;
        }
        .direction:hover, .direction:active {
            background-color: #3b79f5;
            color: white;
            border: 2px solid #3b79f5; 
            border-radius: 4px;
            transform: scale(1.0);

        }
    </style>
    </head>
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
        <section class="section-cant" id="cities">
            <div class="row">
            <br><br><br>
                <h2>Our Canteens</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-5 cities-box">
                   <img src="images/919.jpg"><br><br>
                    <h3><a id="asjt" href="alasjt.php" class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">SJT Canteen</a></br></br><a id="asjt" href="map.php" class="direction" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DIRECTIONS</a><br><br>Inside SJT</h3>
                    <p id="psjt" style="margin: auto 10px;text-align: center;"></p>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/943.jpg"><br><br>
                    <h3><a id="adc" href="aladc.php" class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DC</a></br></br><a id="aladc" href="map1.php" class="direction" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DIRECTIONS</a><br><br>Near TT</h3>
                    <p id="pdc" style="margin: auto 10px;text-align: center;"></p>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/2015.jpg"><br><br>
                    <h3><a id="afcnac" href="alanac.php" class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">FC (Non AC)</a></br></br><a id="alanac" href="map2.php" class="direction" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DIRECTIONS</a><br><br>Near K Block</h3>
                    <p id="pfcnac" style="margin: auto 10px;text-align: center;"></p>
                </div>
                <div class="col span-1-of-5 cities-box">
                   <img src="images/2038.jpg"><br><br>
                    <h3><a id="afcac" href="alaac.php" class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">FC (AC)</a></br></br><a id="alaac" href="map3.php" class="direction" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DIRECTIONS</a><br><br>Near TT</h3>
                    <p id="pfcac" style="margin: auto 10px;text-align: center;"></p>
                </div>
                <div class="col span-1-of-5 cities-box">
                    <img src="images/2299.jpg"><br><br>
                     <h3><a id="adar"href="aladar.php" class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">Darling</a></br></br><a id="aladar" href="map4.php" class="direction" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;">DIRECTIONS</a><br><br>Gate 2</h3>
                     <p id="pdar" style="margin: auto 10px;text-align: center;"></p>
                 </div>
            </div>
            <div class="row">
            <br><br><br>
                <h2>Leaderboard</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-5">
                   &nbsp;
                </div>
                <div class="col span-1-of-5 cities-box">
                    <?php 
                        $best = "select cid, max(tot) from (select cid, sum(cost) as tot from ord group by cid) as T";
                        $res = mysqli_query($db,$best);
                        $ans = mysqli_fetch_array($res, MYSQLI_ASSOC);
                        $name = "select name from canteen where cid=".$ans['cid']."";
                        $res = mysqli_query($db,$name);
                        $nm = mysqli_fetch_array($res, MYSQLI_ASSOC);
                    ?>
                   <img src="images/<?php echo $ans['cid'] ?>.jpg"><br><br>
                    <h3><div class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;"><?php echo $nm['name'] ?></div><br><strong>SALES</strong><br>Total Sale : <?php echo $ans['max(tot)'] ?></h3>
                </div>
                <div class="col span-1-of-5">
                   &nbsp;
                </div>
                <div class="col span-1-of-5 cities-box">
                   <?php 
                        $mrate = "select max(avrat) from (select cid, sum(rating)/count(cid) as avrat from feedback group by cid) as t";
                        $m = mysqli_query($db,$mrate);
                        $a = mysqli_fetch_array($m, MYSQLI_ASSOC);
                        $rate = "select cid, sum(rating)/count(cid) as avrat from feedback group by cid";
                        $res = mysqli_query($db,$rate);
                        while($ans = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            if($ans['avrat']==$a['max(avrat)']){
                                $cid = $ans['cid'];
                                $name = "select name from canteen where cid=".$ans['cid']."";
                                $r = mysqli_query($db,$name);
                                $nm = mysqli_fetch_array($r, MYSQLI_ASSOC);
                                break;
                            }
                        }
                    ?>
                   <img src="images/<?php echo $cid ?>.jpg"><br><br>
                    <h3><div class="cant" style="text-decoration: none; border: 2px solid #18314f; border-radius: 4px; padding: 2px 4px;"><?php echo $nm['name'] ?></div><br><strong>SALES</strong><br>Total Rating : <?php echo round($a['max(avrat)'],2) ?></h3>
                </div>
                <div class="col span-1-of-5">
                    &nbsp;
                 </div>
            </div>
        </section>
        <section class="section-plans">
            <div class="row">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row">
                <a style="text-decoration: none; color:#18314f;" href="stordstat.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;">
                        VIEW TODAY'S ORDERS
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color: white;" href="stordview.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;background-color: #18314f;">
                        ORDER HISTORY
                    </div>
                </a>
            </div>
            <div class="row">
                <a style="text-decoration: none; color: white;" href="givefeed.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;background-color: #18314f;">
                        GIVE FEEDBACK
                    </div>
                </a>
                <div class="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <a style="text-decoration: none; color:#18314f;" href="viewfeed.php">
                    <div class="col span-5-of-11" style="box-shadow: 4px 4px 10px rgba(72, 39, 10, 0.15); text-align: center; padding: 1%;border: 2px solid #18314f;">
                        VIEW FEEDBACK
                    </div>
                </a>
                
            </div>
        </section>
        <script>
            var today = new Date();
            // var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var asjt=document.getElementById("asjt");
            var psjt=document.getElementById("psjt");

            var adc=document.getElementById("adc");
            var pdc=document.getElementById("pdc");

            var afcnac=document.getElementById("afcnac");
            var pfcnac=document.getElementById("pfcnac");

            var afcac=document.getElementById("afcac");
            var pfcac=document.getElementById("pfcac");

            var adar=document.getElementById("adar");
            var pdar=document.getElementById("pdar");

            document.getElementById("asjt").addEventListener("click",function(){
                if(!(today.getHours()>=0 && today.getHours()<20) ){
                    asjt.setAttribute("href","javascript:void(0)");
                    psjt.innerHTML="CANTEEN CLOSED";
                    psjt.classList.add("warning");
                }
                
            });

            document.getElementById("adc").addEventListener("click",function(){
                if(!(today.getHours()>=12 && today.getHours()<20) ){
                    adc.setAttribute("href","javascript:void(0)");
                    pdc.innerHTML="CANTEEN CLOSED";
                    pdc.classList.add("warning");
                }
                
            });

            document.getElementById("afcnac").addEventListener("click",function(){
                if(!(today.getHours()>=10 && today.getHours()<20) ){
                    afcnac.setAttribute("href","javascript:void(0)");
                    pfcnac.innerHTML="CANTEEN CLOSED";
                    pfcnac.classList.add("warning");
                }
                
            });

            document.getElementById("afcac").addEventListener("click",function(){
                if(!(today.getHours()>=10 && today.getHours()<20 )){
                    afcac.setAttribute("href","javascript:void(0)");
                    pfcac.innerHTML="CANTEEN CLOSED";
                    pfcac.classList.add("warning");
                }
                
            });

            document.getElementById("adar").addEventListener("click",function(){
                if(today.getHours()>3 ){
                    adar.setAttribute("href","javascript:void(0)");
                    pdar.innerHTML="CANTEEN CLOSED";
                    pdar.classList.add("warning");
                }
                
            });
            
        </script>
   </body>
</html>
