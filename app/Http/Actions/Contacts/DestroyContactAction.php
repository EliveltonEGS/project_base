<?php

namespace App\Http\Actions\Contacts;

class DestroyContactAction extends ContactBaseAction
{
    public function execute(int $id): void
    {
        $this->contactRepositoy->delete($id);
    }
}
