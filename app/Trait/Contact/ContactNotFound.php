<?php

namespace App\Trait\Contact;

trait ContactNotFound
{
    public static function contactNotFound(): array
    {
        return ['message' => 'Contact not found'];
    }
}
