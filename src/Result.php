<?php

namespace Src;

class Result
{
    protected $status_code;
    protected $data;

    public function __construct(array $response)
    {
        $this->status_code = $response['status_code'];
        $this->data = $response['body'];
    }

    public function getData()
    {
        return $this->data;
    }

    public function getStatusCode()
    {
        return $this->status_code;
    }
}
