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
            <div class="col-sm-4 text-justify">
                <p class="text-center"><i class="material-icons" style="font-size:50px;">domain</i></p>
                <p> A LUX RESIDUOS é uma empresa no segmento de engenharia ambiental e
                    segurança do trabalho com enfoque no gerenciamento de resíduos</p>
            </div>
            <div class="col-sm-4 text-center">

            </div>
            <div class="col-sm-4 text-center">
                <p ><i class="material-icons" style="font-size:50px;">contact_phone</i></p>
                <p>Telefone: (74)98828-0783 | (74)98833-8083</p>
                <p>E-mail: contatoluxresiduos01@gmail.com</p>
            </div>
        </div>
    </section>
    <footer class="p-3 ">
        Copyright {{date('Y')}} - Todos os direitos reservados! - Desenvolvido por Herbet Jr. | Atena Agência
    </footer>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5ccbc375d07d7e0c6391b025/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>