<?php

namespace App\Http\Controllers\Contact;

use App\Actions\Contacts\AllContactAction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ContactAllController extends Controller
{
    public function __construct(private AllContactAction $allAction) {}

    public function __invoke(): JsonResponse
    {
        return response()->json($this->allAction->execute());
    }
}
