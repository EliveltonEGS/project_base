<?php

namespace App\Http\Actions\Contacts;

use App\Models\Contact;

class UpdateContactAction extends ContactBaseAction
{

    public function execute(int $id, array $data): Contact
    {
        return $this->contactRepositoy->update($id, $data);
    }
}
