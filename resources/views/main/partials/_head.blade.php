<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

{{-- <!-- Bootstrap core CSS --> --}}
<link href="{{ asset('main_resources') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

{{-- <!-- Custom styles for this template --> --}}
<link href="{{ asset('main_resources') }}/css/modern-business.css" rel="stylesheet">

{{-- own css --}}
<link href="{{ asset('main_resources') }}/css/style.css" rel="stylesheet">

{{-- font awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

{{-- own page script and style --}}
@yield('stylesheets')
