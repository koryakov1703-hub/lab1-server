<?php

namespace App\DTO;

class DatabaseInfoDTO
{
    public function __construct(
        public string $driver,
        public ?string $host,
        public ?string $database,
    ) {}

    public function toArray(): array
    {
        return [
            'driver' => $this->driver,
            'host' => $this->host,
            'database' => $this->database,
        ];
    }
}
