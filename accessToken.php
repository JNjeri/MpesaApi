<?php

    $consumerKey = "IxpNiTXNkM0K00qCUwCRTqah5CTLY6rw";
    $consumerSecret = "YvNn1Aujjxb1vFZ5";

    $headers = ['content-Type:application/json ; Charset = utf-8'];

    $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $curl = curl_init();

    $curl_setOpt($curl ,CURLOPT_HTTPHEADER , $headers);
    $curl_setOpt($curl ,CURLOPT_TRANSFER,TRUE);

    $curl_setOpt($curl , CURLOPT_HEADER, FALSE);
    $curl_setOpt ($curl, CURLOPT_USERPWD, $consumerKey,":", $consumerSecret );

    $result = curl_exec($curl);
    $status = curl_getinfo($ch CURL_INFO_HTTP_CODE);
    $result = json_decode(result);

    $access token = $result ->access_token;


    echo $access_token;
    curl_close($curl);