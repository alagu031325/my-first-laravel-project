@extends('layouts.master')

@section('content')
<main role="main" class="container">
    <div class="row">
        @foreach ($posts as $post)
            {{-- we accessing posts via category --}}
            {{-- Establishing Many to Many relationship --}}
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4> {{$post->title}}</h4>
                        <p> {{$post->description}} </p>
                        <ul>
                            @foreach ($post->tags as $tag)
                                <li> {{$tag->name}} </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection
