<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Api
{
    public function callAPI($method, $url, $data, $authentication)
    {
        $curl = curl_init();
        switch ($method) {
            case "POST":
                -curl_setopt($curl, CURLOPT_POST, 1);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "GET":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
                break;
            case "PATCH":
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        if ($authentication) {
            $token = $_SESSION["token"];
            $authorization = "Authorization: Bearer " . $token; // Prepare the authorisation token
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('content-type:application/json', $authorization));
        } else
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['content-type:application/json']);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($curl);
        $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $result = substr($response, $header_size);
        $finalresponse = [$httpcode, $result];
        $err = curl_error($curl);
        if ($err) {
            echo 'Error : ' . $err;
        } else {
            //echo $result;
        }

        curl_close($curl);
        return $finalresponse;
    }
}
