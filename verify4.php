<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>OTP Verification</title>
</head>
<body style="background:#18314f">

<div class="container">
    <div class="content-section">
    <div class="verify1" style="display:flex;flex-direction:column;justify-content:center;align-items:center;margin:130px 250px 0px 250px;color:white;">
        <h2>Verify your OTP</h2>
        <form  action="alaac.php" method="POST" style="display:flex;flex-direction:column;justify-content:center;align-items:center; margin-top:30px;">
            <div class="form-group">
                
                <input type="number" class="form-control" name="otp" aria-describedby="emailHelp" placeholder="Enter OTP">
                <small id="emailHelp" class="form-text " style="color:white">Do not share this OTP with anyone else.</small>
            </div>
            
            <button type="submit" class="btn btn-success" name="verify4">Verify</button>
        </form>
    </div>
        
    </div>
</div>
    
</div>

    
    
</body>
</html>