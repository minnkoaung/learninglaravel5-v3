<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>

@include('navbar')

@yield('content')

</body>
</html>