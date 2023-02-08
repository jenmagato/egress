<?php

namespace Src;

require_once './vendor/autoload.php';

class Activity
{
    protected $connector;

    public function __construct(Connector $connector)
    {
        $this->connector = $connector;
    }

    public function get(string $endpoint, array $params = [])
    {
        return $this->connector->send('GET', $endpoint . '?' . http_build_query($params));
    }

    public function post(string $endpoint, array $data = [])
    {
        return $this->connector->send('POST', $endpoint, $data);
    }

    public function put(string $endpoint, array $data = [])
    {
        return $this->connector->send('PUT', $endpoint, $data);
    }

    public function delete(string $endpoint, array $data = [])
    {
        return $this->connector->send('DELETE', $endpoint, $data);
    }
}
