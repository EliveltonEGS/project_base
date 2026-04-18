<?php

namespace App\Http\Actions\Contacts;

use App\Http\DTOs\ContactDTO;
use App\Models\Contact;

class UpdateContactAction extends ContactBaseAction
{

    public function execute(ContactDTO $dto): Contact
    {
        return $this->contactRepositoy->update($dto->id, $dto->toArray());
    }
}
