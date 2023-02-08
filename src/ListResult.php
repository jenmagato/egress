<?php

namespace Src;

class ListResult extends Result {
    protected $data;

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function toArray() {
        return array_map(function (Result $result) {
            return $result->getData();
        }, $this->data);
    }
}
