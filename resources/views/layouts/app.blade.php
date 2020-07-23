<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
</head>
<body>
    @include('partials.topbar')
    <br>

    <div class="row">
        @include('partials.messages')
        @yield('content')
    </div>
</body>
</html>