@extends('layouts.app')

@section('page-title', $contact->name)

@section('main-content')
<div class="container py-3">
    <h2 class="text-primary">Dettagli Contatto</h2>

    <div class="py-3">
        <div class="mb-3">
            <label class="form-label"><strong>Nome:</strong></label>
            <p>{{ $contact->name }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Email:</strong></label>
            <p>{{ $contact->email }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Messaggio:</strong></label>
            <p>{{ $contact->message }}</p>
        </div>
    </div>


    <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">Go Back <i class="fa-solid fa-left-long"></i></a>
</div>
@endsection