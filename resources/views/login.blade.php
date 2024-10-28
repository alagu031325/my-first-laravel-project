@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2 class="mb-4">Login </h2>
        {{-- If laravel gets validation errors it populates in $errors variable --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{route('login.submit')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="username" class="form-label">User Name:</label>
                        <input name="name" id="username" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="useremail" class="form-label">User Email:</label>
                        <input name="email" id="useremail" type="text" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" id="password" type="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection