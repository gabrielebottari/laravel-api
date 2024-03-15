@extends('layouts.email-template')

@section('content')
    <div class="container p-3">
        <h1 class="text-primary py-3">
            Ciao Gabriele
        </h1>
    
        <p>
            Hai ricevuto un nuovo messaggio dal frontend in Vue:
        </p>
    
        <ul class="list-group">
            <li class="list-group-item">
                <span class="fw-semibold">Nome:</span> {{ $contact->name }}
            </li>
            <li class="list-group-item">
                <span class="fw-semibold">Email:</span> {{ $contact->email }}
            </li>
            <li class="list-group-item">
                <span class="fw-semibold">Messaggio:</span>
                <p>
                    {!! nl2br( $contact->message) !!}
                </p>
            </li>
        </ul>
    </div>

@endsection