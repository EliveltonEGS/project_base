<?php

namespace App\Http\Actions\Contacts;

use App\Models\Contact;

class FindContactAction extends ContactBaseAction
{
    public function execute(?int $id): ?Contact
    {
        return $this->contactRepositoy->find($id);
    }
}
