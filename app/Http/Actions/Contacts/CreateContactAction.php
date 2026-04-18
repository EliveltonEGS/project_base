<?php

namespace App\Http\Actions\Contacts;

use App\Models\Contact;

class CreateContactAction extends ContactBaseAction
{

    public function execute(array $data): Contact
    {
        return $this->contactRepositoy->create($data);
    }
}
