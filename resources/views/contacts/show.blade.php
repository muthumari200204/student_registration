@extends('contacts.layout')

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <h3>student Details</h3>
    </div>
    <div class="card-body">
        <h5 class="card-title"><strong>studentName:</strong> {{ $contact->name }}</h5>
        <p class="card-text"><strong>Address:</strong> {{ $contact->address }}</p>
        <p class="card-text"><strong>Phone:</strong> {{ $contact->mobile }}</p>
    </div>
</div>
@endsection
