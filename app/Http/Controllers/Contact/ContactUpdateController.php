<?php

namespace App\Http\Controllers\Contact;

use App\Http\Actions\Contacts\{
    FindContactAction,
    UpdateContactAction
};
use App\Http\Controllers\Controller;
use App\Trait\Contact\ContactNotFound;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactUpdateController extends Controller
{
    use ContactNotFound;

    public function __construct(
        private UpdateContactAction $updateAction,
        private FindContactAction $findAction
    ) {}

    public function __invoke(int $id, Request $request): JsonResponse
    {
        if (!$this->findAction->execute($id)) {
            return response()->json(ContactNotFound::contactNotFound(), 404);
        }

        $contact = $this->updateAction->execute($id, $request->only('name', 'email'));

        return response()->json($contact, 201);
    }
}
