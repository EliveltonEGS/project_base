<?php

namespace App\Actions\Contacts;

class DestroyContactAction extends ContactBaseAction
{
    public function execute(int $id): void
    {
        $this->contactRepositoy->delete($id);
    }
}
