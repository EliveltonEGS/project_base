<?php

namespace App\Repositories\Contact;

use App\Models\Contact;
use App\Repositories\Shared\BaseRepository;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    public function __construct(Contact $model)
    {
        return parent::__construct($model);
    }
}
