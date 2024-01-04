<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Task List Project</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
        {{-- blade-formatter-disabled --}}
        {{-- blade-formatter-enabled --}}
        @yield('styles')
    </head>
    <body class="container mx-auto mt-10 max-w-lg">
        <main>
            <header>
                <h1>@yield('title')</h1>
            </header>

            @if(session()->has('success'))
                <div>{{session('success')}}</div>
            @endif
            @yield('content')
        </main>
    </body>
</html>