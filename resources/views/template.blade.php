<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/imagens/icon.png" />
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/classes.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.js"></script>

    <title>Lux Resíduos</title>

</head>

<body>
    <header class="barra ">
        <div class="row p-2">
            <div class="col-sm-4 text-center">
                <img src="/imagens/lux.png" alt="" class="logo">
            </div>
            <div class="col-sm-8 text-center  ">
                <nav class="navbar navbar-expand-md  justify-content-center barra-menu">


                    <!-- Toggler/collapsibe Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="./">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/institucional">Institucional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/servicos">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Venda seu resíduo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contato">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    @yield('conteudo')
    <section class="container-fluid bg-dark text-light p-2 mt-2">
        <div class="row">
            <div class="col-sm-4">
                <h4>Lux Resíduos</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eius, est voluptas totam nulla voluptatum adipisci, dignissimos distinctio labore ipsam magni quaerat molestiae reprehenderit ea qui, incidunt tempora temporibus saepe?</p>
            </div>
            <div class="col-sm-4">
                <p>Descubra como pode ser fácil destinar os resíduos da suas empresa</p>
            </div>
            <div class="col-sm-4">
                <h4>Contato</h4>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel illo, nesciunt quae et pariatur impedit explicabo animi temporibus harum iure. Sequi aliquid ad earum error accusantium quo laborum qui nulla.</p>
            </div>
        </div>
    </section>
    <footer class="p-3 ">
        Copyright {{date('Y')}} - Todos os direitos reservados! - Desenvolvido por Herbet Jr. | Atena Agência
    </footer>

    

</body>

</html>