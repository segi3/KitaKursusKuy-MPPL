<!DOCTYPE html>
<html lang="en">

<head>

    @include('main.partials._head')

</head>

<body>

    <!-- Navigation -->
    @include('main.navbars._navbar-white')
    
    {{-- jumbotron dll --}}
    @yield('content-header')
    
    {{-- content --}}
    @yield('content')
   

    {{-- Footer --}}
    @include('main.partials._footer')

    {{-- <!-- Bootstrap core JavaScript --> --}}
    @include('main.partials._javascripts')

    {{-- page own js --}}
    @yield('scripts')

</body>

</html>
