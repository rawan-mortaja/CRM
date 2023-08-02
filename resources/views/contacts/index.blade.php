@extends('layouts.master')

@section('content')
<div class="container bottom-3">
    <h2 class="mb-4">Contacts</h2>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a>
            @if (count($contacts) > 0)
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->firstName }}</td>
                                <td>{{ $contact->lastName }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->phone }}</td>
                                <td>{{ $contact->address }}</td>
                                <td>
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info btn-sm">View</a>
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form class="d-inline" action="{{ route('contacts.destroy', $contact->id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $contacts->links() }}
            @else
                <p>No contacts found.</p>
            @endif
        </div>
    </div>
</div>
@endsection
