<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- === main container === --}}
    <main class="content py-20">
        <div class="content">
            @yield('content-auth')
        </div>
    </main>    
</body>
</html>