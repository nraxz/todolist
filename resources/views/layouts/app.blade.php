<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Todo List</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
<body>
@include('inc.navbar')
<div class="container">
    @include('inc.messages')
    @yield('content')
</div>

<div class="footer">
    <p class="text-center">Copyright &copy; 2019 alutama</p>
</div>

</body>
</html>