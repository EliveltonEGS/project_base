<?php

namespace App\Actions\Contacts;

use App\DTOs\ContactDTO;
use App\Models\Contact;

class CreateContactAction extends ContactBaseAction
{

    public function execute(ContactDTO $dto): Contact
    {
        return $this->contactRepositoy->create($dto->toArray());
    }
}
