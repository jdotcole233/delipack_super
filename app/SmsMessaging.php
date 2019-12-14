<?php

namespace App;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class SmsMessaging {
    private $APP_ID = "379d563e-dd7b-48e0-8eef-5b2e5be8223d";
    private $APP_SECRET = "KyhFRU5dFA3fI83daSTmpZBRwRqqnWID8ltQgOrus";
    private $SMS_ENDPOINT = "https://api.wittyflow.com/v1/messages/send";
    private $method = "POST";
    private $type = 1;
    private $message;
    private $phonenumber;
    private $from;

    public function __construct ($message, $phonenumber, $from) {
        $this->message = $message;
        $this->phonenumber = $phonenumber;
        $this->from = $from;
    }


    public function sendSMS (){
        $client = new Client();
        $body = [
            "app_id" => $this->APP_ID,
            "app_secret" => $this->APP_SECRET,
            "from" => $this->from,
            "to" => $this->phonenumber,
            "message" => $this->message,
            "type" => $this->type
        ];
       $response =  $client->request($this->method, $this->SMS_ENDPOINT, [ 'form_params' => $body]);
       return response()->json($response);
    }



}
