<?php

namespace App\Http\Actions\Contacts;

use App\Repositories\Contact\ContactRepositoryInterface;

class ContactBaseAction
{
    public function __construct(protected ContactRepositoryInterface $contactRepositoy) {}
}
