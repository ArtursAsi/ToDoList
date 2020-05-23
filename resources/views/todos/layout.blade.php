<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>ToDo</title>
</head>
<body>

<nav class="navbar navbar-dark bg-primary">
    <a href="/">Home</a>
    <a href="/todos/create">Create</a>
    <a href="/todos">Show all</a>
    <a href=""></a>
</nav>

@yield('todos.home')
@yield('todos.create')
@yield('todos.index')
@yield('todos.show')
@yield('todos.edit')

</body>
</html>
