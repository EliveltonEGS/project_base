<?php

namespace App\DTOs;

class ContactDTO
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly ?string $email
    ) {}

    public static function makeFromArray(array $data, ?string $id = null): self
    {
        return new self(
            id: $id ?? null,
            name: $data['name'],
            email: $data['email'] ?? null
        );
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
