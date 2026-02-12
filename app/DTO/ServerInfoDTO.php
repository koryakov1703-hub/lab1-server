<?php

namespace App\DTO;

class ServerInfoDTO
{
    public function __construct(
        public string $php_version,
    ) {}

    public function toArray(): array
    {
        return [
            'php_version' => $this->php_version,
        ];
    }
}