<?php

namespace App\Http\Controllers\Contact;

use App\Http\Actions\Contacts\CreateContactAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactStoreController extends Controller
{
    public function __construct(private CreateContactAction $storeAction) {}

    public function __invoke(Request $request): JsonResponse
    {
        $contact = $this->storeAction->execute($request->only('name', 'email'));
        return response()->json($contact, 201);
    }
}
