<?php

namespace App\Http\Controllers\Contact;

use App\Actions\Contacts\FindContactAction;
use App\Http\Controllers\Controller;
use App\Trait\Contact\ContactNotFound;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactFindController extends Controller
{
    use ContactNotFound;

    public function __construct(private FindContactAction $findAction) {}

    public function __invoke(int $id): JsonResponse
    {
        $contact = $this->findAction->execute($id);

        if (!$contact) {
            return response()->json(ContactNotFound::contactNotFound(), 404);
        }

        return response()->json($contact);
    }
}
