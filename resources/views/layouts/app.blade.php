<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic simulator</title>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">

    @vite('resources/js/app.js')
</head>
<body>
    
    @include('partials.header')

    <main>
        
        @yield('content') 
        
    </main>
   

    @include('partials.footer')

</body>
</html>