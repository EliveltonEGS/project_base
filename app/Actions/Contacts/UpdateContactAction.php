<?php

namespace App\Actions\Contacts;

use App\DTOs\ContactDTO;
use App\Models\Contact;

class UpdateContactAction extends ContactBaseAction
{

    public function execute(ContactDTO $dto): Contact
    {
        return $this->contactRepositoy->update($dto->id, $dto->toArray());
    }
}
