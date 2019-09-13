<?php

    header ("content_type:application/json");
    //the resonse we get 
    $response ='{
    "ResultsCode":0,
    "ResultDesc":"confirmation recieved succesfully";
            }';

//data
$mpesaResponse = file_get_contents('php://inputs');

//log of the response
$logFile = "$m_PESAResponse.txt";
$jsonMpesaResponse = json_decode($mpesaResponse,TRUE);

//write to file
$log = fopen($logFile,'a'); //opensthelogfile
fwrite ($log,$mpesaResponse);
fclose($log);

echo $response;
?>