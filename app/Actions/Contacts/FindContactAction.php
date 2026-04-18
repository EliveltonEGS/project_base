<?php

namespace App\Actions\Contacts;

use App\Models\Contact;

class FindContactAction extends ContactBaseAction
{
    public function execute(?int $id): ?Contact
    {
        return $this->contactRepositoy->find($id);
    }
}
