<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lato Admin</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
    {{-- inclusione scss  --}}

</head>

<body>
@include('admin.partials.header')
@yield('content')
@include('admin.partials.aside')
@include('admin.partials.footer')
</body>

</html>
