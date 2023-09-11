<?php
namespace DadanDev\MidtransPay;
class Configurasi{
    public $environment;
    public const SANBOX_ENDPOINT = 'https://api.sandbox.midtrans.com';
    public const PRODUCTION_ENDPOINT = 'https://api.midtrans.com';
    public $serverKey;
    public function __construct($environment = Environment::DEVELOPMENT) {
        $this->environment = $environment;   
    }
    public function generateUrlEndpoint(){
        if($this->environment === Environment::DEVELOPMENT){
            return self::SANBOX_ENDPOINT;
        } else{
            return self::PRODUCTION_ENDPOINT;
        }
    }
    public function setServerKey(string $serverKey){
        $this->serverKey  = $serverKey;
    }
    public function getServerKey(){
        return $this->serverKey;
    }
    

}