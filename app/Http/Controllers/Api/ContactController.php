<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Contact;

// Form request
use App\Http\Requests\StoreContactRequest;

// Helpers
use Illuminate\Support\Facades\Mail;

// Mailable
use App\Mail\NewContact;

class ContactController extends Controller
{

    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('gabriele.bottari@boolean')->send(new NewContact($contact));

        return response()->json([
            'success' => true,
            'message' => 'Contatto salvato con successo',
        ]);
    }

}