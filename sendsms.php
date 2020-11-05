
<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://http-api.d7networks.com/send?username=eliz3040&password=och02mhD
                  &dlr-method=POST&dlr-url=https://4ba60af1.ngrok.io/receive&dlr=yes&dlr-level=3&to=919496354665
                  &from=smsinfo&content=This%20is%20the%20sample%20content%20sent%20to%20test%20",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;
?>                                            