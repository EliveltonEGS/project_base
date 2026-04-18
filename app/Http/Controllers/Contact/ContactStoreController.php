<?php

namespace App\Http\Controllers\Contact;

use App\Actions\Contacts\CreateContactAction;
use App\Http\Controllers\Controller;
use App\Http\DTOs\ContactDTO;
use App\Http\Requests\Contact\ContactCreateRequest;
use App\Trait\Contact\ContactNotFound;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactStoreController extends Controller
{
    use ContactNotFound;

    public function __construct(private CreateContactAction $storeAction) {}

    public function __invoke(ContactCreateRequest $request): JsonResponse
    {
        $dto = ContactDTO::makeFromArray($request->validated());
        $contact = $this->storeAction->execute($dto);
        return response()->json($contact, 201);
    }
}
