@extends('layouts.master')

@section('content')
<main role="main" class="container">
   
    {{-- asset function will determine our app domain 'http://my-first-laravel-project.test/storage/app/public' and adds the path to it --}}
    {{-- we need to create a symlink so that the file is publically available to access --}}
    {{-- <img src="{{asset('storage/app/public/wp_logo.png')}}" alt="wordpress logo"> --}}
    {{-- public is the root directory and we can access the symlink created --}}
    <img src="{{asset('/storage/wp_logo.png')}}" width="200px" height="auto" alt="wordpress_logo" class="mt-5">
    <div class="col-md-4 mt-4">
         {{-- $errors variable populated from laravel for validation errors and we need to display it to the user --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                {{-- If we need to work with files we need to use enctype --}}
                {{-- If we get page expired error then we need to add CSRF Token --}}
                <form action="{{route('upload-file')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class='mb-2'>Upload Image:</label>
                        {{-- upload a image file --}}
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-primary mt-3" href="{{route('download')}}">Download Image</a>
</main>
@endsection
