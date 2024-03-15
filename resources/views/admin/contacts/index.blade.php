@extends('layouts.app')

@section('page-title', 'Tutti i Contatti')

@section('main-content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h2 class="text-primary py-3">Contatti</h2>

            <div class="mb-3">
                <form action="{{ route('admin.contacts.index') }}" method="GET" class="row g-2">
                    <div class="col">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Cerca per nome..." value="{{ request()->input('name') }}">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Cerca per email..." value="{{ request()->input('email') }}">
                    </div>
                    <div class="col-auto d-flex align-items-end">
                        <button type="submit" class="btn btn-primary">
                            Cerca <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>

            <table class="table table-bordered table-striped table-primary table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Messaggi</th>
                        <th class="text-center">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-sm btn-primary me-2">Info <i class="fa-solid fa-circle-info"></i></a>
                                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questa tipologia?');">Elimina <i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection