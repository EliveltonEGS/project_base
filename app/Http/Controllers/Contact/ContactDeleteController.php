<?php

namespace App\Http\Controllers\Contact;

use App\Actions\Contacts\{
    DestroyContactAction,
    FindContactAction
};
use App\Http\Controllers\Controller;
use App\Trait\Contact\ContactNotFound;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactDeleteController extends Controller
{
    use ContactNotFound;

    public function __construct(
        private DestroyContactAction $destroyAction,
        private FindContactAction $findAction
    ) {}

    public function __invoke(int $id): JsonResponse
    {
        if (!$this->findAction->execute($id)) {
            return response()->json(ContactNotFound::contactNotFound(), 404);
        }

        return response()->json($this->destroyAction->execute($id), 204);
    }
}
