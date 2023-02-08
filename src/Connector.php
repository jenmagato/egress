<?php

namespace Src;

require_once './vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\RequestException;

class Connector
{
    protected $baseUri;
    protected $client;

    public function __construct(string $baseUri)
    {
        $this->baseUri = $baseUri;
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function send(string $method, string $endpoint, array $data = [])
    {
        try {
            $request = new Request($method, $endpoint, [], json_encode($data));
            $response = $this->client->send($request);

            if ($response->getStatusCode() >= 400) {
                throw new RequestException(sprintf(
                    'Request failed with status code %d',
                    $response->getStatusCode()
                ), $request);
            }

            return [
                'status_code' => $response->getStatusCode(),
                'body' => json_decode($response->getBody(), true)
            ];
        } catch (RequestException $e) {
            throw $e;
        }
    }
}
