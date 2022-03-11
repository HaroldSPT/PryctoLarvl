<html>
    <head>
        <title>App Name - @yield('titulo')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        {{-- Al llamar un elemento por su nombre desde otra página podremos
         implementar la plantilla --}}
        
        {{-- Este container es para bootstrap y no se debe cambiar --}}
        <nav class="navbar navbar-expand navbar-light bg-warning">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#">Institución</a>
                <a class="nav-item nav-link" href="#">Cursos</a>
            </div>
        </nav>  
        <div class="container">
            <br>
            @yield('contenido')
        </div>
    </body>
</html>