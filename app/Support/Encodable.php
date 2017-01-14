<?php

namespace App\Support;

trait Encodable
{
    public function encode($data)
    {
        if (! is_numeric($data)) {
            return base64_encode($data);
        }

        return $data;
    }

    public function decode($data)
    {
        if ($this->isEncoded($data)) {
            return base64_decode($data);
        }

        return $data;
    }

    public function isEncoded($data)
    {
        return base64_encode(base64_decode($data, true)) === $data;
    }
}
