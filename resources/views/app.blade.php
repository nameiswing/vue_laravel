<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script defer src="{{ mix('js/app.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            font-family: 'Poppins', sans-serif;
            color: #333;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #42b983;
            font-weight: 500;
        }

    </style>
</head>

<body class="antialiased" >
    <div id="app">
        {{-- vue injects content here --}}
    </div>
</body>

</html>
