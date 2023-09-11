<?php

namespace DadanDev\MidtransPay;

class PayMent
{
    public Configurasi $configurasi;
    /**
     * @param Configurasi $configurasi
     */
    public function __construct(Configurasi $configurasi)
    {
        $this->configurasi = $configurasi;
    }
    /**
     * for cancel orders
     */
    public function cancel($order_id)
    {
        $url = $this->configurasi->generateUrlEndpoint() . "/v2/{$order_id}/cancel";
        $data = $this->requestCurl([1, 24], $url);
        return json_decode($data);
    }
    /**
     * for check status
     */
    public function cekStatus($order_id)
    {
        $url = $this->configurasi->generateUrlEndpoint() . "/v2/{$order_id}/status";
        $data = $this->requestCurl(null, $url);
        return json_decode($data);
    }
    /**
     * Request Curl
     */
    public function requestCurl($data = [], $url = null)
    {
        $curl_init = curl_init();
        $curl_options = [
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Accept: application/json',
                'User-Agent: DadanDev App.001',
                'Authorization: Basic ' . base64_encode($this->configurasi->getServerKey() . ':')
            ),
            CURLOPT_RETURNTRANSFER => 1
        ];
        if ($data && count($data) > 0) {
            curl_setopt($curl_init, CURLOPT_POST, 1);
            curl_setopt($curl_init, CURLOPT_POSTFIELDS, json_encode($data));
        }
        curl_setopt_array($curl_init, $curl_options);
        $data = curl_exec($curl_init);
        if ($data) {
            return $data;
        }
    }

    public function pay($data)
    {
        $url = $this->configurasi->generateUrlEndpoint() . "/v2/charge";
        $response = $this->requestCurl($data, $url);
        return json_decode($response);
    }
}
