<?php

namespace App\DTO;

class ClientInfoDTO
{
    public function __construct(
        public string $ip,
        public string $useragent,
    ) {}

    public function toArray(): array
    {
        return [
            'ip' => $this->ip,
            'useragent' => $this->useragent,
        ];
    }
}
