@extends('layouts.master')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Contact</h2>

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstName" id="firstName" class="form-control @error('firstName') is-invalid @enderror" value="{{ old('firstName', $contact->firstName) }}" required>
                    @error('firstName')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastName" id="lastName" class="form-control @error('lastName') is-invalid @enderror" value="{{ old('lastName', $contact->lastName) }}" required>
                    @error('lastName')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $contact->email) }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $contact->phone) }}">
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" id="address" class="form-control @error('address') is-invalid @enderror" rows="3" value="{{ old('address', $contact->address) }}">
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City</label>
                    <input name="city" id="city" class="form-control @error('city') is-invalid @enderror" rows="3" value="{{ old('city', $contact->address) }}">
                    @error('city')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
