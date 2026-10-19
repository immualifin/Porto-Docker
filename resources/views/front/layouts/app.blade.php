<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/output.css') }}?v={{ file_exists(public_path('css/output.css')) ? filemtime(public_path('css/output.css')) : time() }}" rel="stylesheet">
  @stack('before-styles')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  @stack('after-styles')
  <title>@yield('title')</title>
</head>
<body class="text-portto-black font-poppins">
    @yield('content')

    @stack('before-scripts')
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('after-scripts')
</body>
</html>
