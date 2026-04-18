<?php

namespace App\Actions\Contacts;

use Illuminate\Database\Eloquent\Collection;

class AllContactAction extends ContactBaseAction
{
    public function execute(): Collection
    {
        return $this->contactRepositoy->all();
    }
}
