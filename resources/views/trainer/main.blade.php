<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{ $slot }}
</body>

</html>
