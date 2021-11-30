<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('titulo')</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg light">
           <div class="collapse navbar-collapse" id="navbar">
               <a href="/" class="navbar-brand">
                    <img src="/img/logo.jpg" alt="logo">
               </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Principal</a>
                    </li>
                    @auth()
                    <li class="nav-item">
                        <a href="/produto/produto" class="nav-link">Criar Produto</a>
                    </li>
                    <li class="nav-item">
                        <a href="/produto/viewProdutos" class="nav-link">Meus produtos</a>
                    </li>
                    <!-- Log Out -->
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Sair</a>
                        </form>
                    </li>
                    @endauth
                    @guest()
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Cadastrar</a>
                    </li>
                    @endguest
                </ul>
           </div>
        </nav>
    </header>
    <main>
        <div class="msg">
            @if(session('msg'))
            <p id="session"> {{ session('msg') }}</p>
            @endif
        </div>
    </main>
    @yield('conteudo')

    <footer class="footer">
        Todos os direitos reservados &COPY; 2021
    </footer>
</body>
</html>
