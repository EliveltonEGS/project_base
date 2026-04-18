<?php

namespace App\Http\Controllers\Contact;

use App\Actions\Contacts\{
    FindContactAction,
    UpdateContactAction
};
use App\Http\Controllers\Controller;
use App\Http\DTOs\ContactDTO;
use App\Http\Requests\Contact\ContactUpdateRequest;
use App\Trait\Contact\ContactNotFound;
use Illuminate\Http\JsonResponse;

class ContactUpdateController extends Controller
{
    use ContactNotFound;

    public function __construct(
        private UpdateContactAction $updateAction,
        private FindContactAction $findAction
    ) {}

    public function __invoke(ContactUpdateRequest $request, int $id): JsonResponse
    {
        $dto = ContactDTO::makeFromArray($request->validated(), $id);

        if (!$this->findAction->execute($dto->id)) {
            return response()->json(ContactNotFound::contactNotFound(), 404);
        }

        $contact = $this->updateAction->execute($dto);

        return response()->json($contact, 201);
    }
}
