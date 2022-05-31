@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Informacion contacto</div>

          <div class="card-body">
            <p>Nombre: {{ $contact->name }}</p>
            <p>Email: <a href="mailto:{{ $contact->email }}">
                {{ $contact->email }}
              </a>
            </p>
            <p>Edad: {{ $contact->age }}</p>
            <p>Telefono: <a href="tel:{{ $contact->phone_number }}">
                {{ $contact->phone_number }}
              </a>
            </p>
            <p>Create at: {{ $contact->created_at }}</p>
            <p>Last updated: {{ $contact->updated_at }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection