@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <div class="row">
        @foreach ($addresses as $address)
            {{-- <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4>Name : {{$user->name}}</h4>
                        <p>Email : {{$user->email}}</p>
                        <p>Address : {{$user->address->address}}</p>
                    </div>
                </div>
            </div> --}}
            {{-- One to One relationship --}}
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4>Name : {{$address->user->name}} </h4>
                        <p>Email : {{$address->user->email}} </p>
                        <p>Address : {{$address->address}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
