@extends('layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">Contact Details</h2>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <strong>First Name:</strong> {{ $contact->firstName }}
            </div>
            <div class="mb-3">
                <strong>Last Name:</strong> {{ $contact->lastName }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $contact->email }}
            </div>
            <div class="mb-3">
                <strong>Phone:</strong> {{ $contact->phone ?: 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Address:</strong> {{ $contact->address ?: 'N/A' }}
            </div>
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
