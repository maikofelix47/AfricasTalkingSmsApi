<?php

require_once('AfricasTalkingGateway/AfricasTalkingGateway.php');

Class SendSms {

    protected $username;
    protected $apikey;

    public function __construct(){
        $this->username = '';
        $this->apikey = '';
    }

    public function sendSms($recipients , $message){

        $gateway = new AfricasTalkingGateway($this->username, $this->apikey);

        try 
        { 
        // Thats it, hit send and we'll take care of the rest. 
        $results = $gateway->sendMessage($recipients, $message);
                    
        }
        catch ( AfricasTalkingGatewayException $e )
        {
        echo "Encountered an error while sending: ".$e->getMessage();
        }

    }

}


?>