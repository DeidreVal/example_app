<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Example App</title>
    </head>
    <body>
        <h1>Example</h1>

        <main>
            @yield('content')
        </main>
        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-denter">
            <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
            <a href="create.html" class="absolute top-1/3 right-10 bg-black text_white py-2 px-5">Post Job</a>
        </footer>
    </body>
</html>