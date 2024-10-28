<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.header')

        <!-- Begin page content -->
        {{-- with yield we can generate child component anywhere --}}
        @yield('content')
        
    @include('layouts.footer')

    {{-- 
    @php
        Any php code we can write
    @endphp

    @isset()
        To check if a variable is set or not
    @endisset

    @empty()

    @endempty
    
    @switch()
        @case()
            
            @break
    
        @default
            Similar to php switch stmts
    @endswitch
    --}}
      

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>