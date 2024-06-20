<!DOCTYPE html>
<html>
<head>
    <title>Books App</title>
</head>
<body>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    @yield('content')
</body>
</html>
