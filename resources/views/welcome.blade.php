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
                                <a class="nav-link" href="#">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Institucional</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <section style="background-color: rgba(0,0,0,0)">
        <div class="painel container-fluid">


        </div>
    </section>

    <section style="background-color: rgba(0,0,0,0)">
        <div class="painel container-fluid">


        </div>
    </section>

    <script>
        $(document).ready(function() {
            $(".logo").attr("src", "/imagens/lux-branco.png").fadeIn("slow");
            $(".barra").addClass("preto-50");
            $(".barra-menu").addClass("preto-50, navbar-dark");
            $(".venda").delay(2000).animate({
                        right: "0px"
                    });
            $(document).scroll(function() {
                var topo = $(document).scrollTop();

                if (topo > 40) {
                   
                    $(".barra").css({
                        background: "white",
                        transition: "2s"
                    });
                    $(".barra-menu").removeClass("navbar-dark").addClass("navbar-light");
                    $(".barra-menu").css({
                        color: "black",
                        transition: "2s"
                    });
                    $(".logo").attr("src", "/imagens/lux.png").fadeIn("slow");
                } else {
                    $(".barra").removeAttr("style");
                    $(".barra").css({
                        transition: "2s"
                    });
                    $(".barra-menu").removeClass("navbar-light").addClass("navbar-dark");
                    $(".logo").attr("src", "/imagens/lux-branco.png").fadeIn("slow");
                }
            });

            $(".vresiduos").click(function () {
                $(".venda").animate({
                        right: "-270px"
                    });
                $(".abrir").removeClass("d-none");    
            });

            $(".abrir").click(function () {
                $(".venda").animate({
                        right: "0px"
                    });
                $(".abrir").addClass("d-none");    
            });
         
         
        })
    </script>
    <style>
        .venda {
            background-color: green;
            color: white;
            position: fixed;
            right: -300px;
            top:150px;
            height: 250px;
            width: 300px;
        }
        .vresiduos{
            cursor: pointer;
        }
        .abrir{
            position: absolute;
            left: 0px;
            top: 100px;
        }
    </style>
    <div class="venda text-right ">
     <span><i class="material-icons vresiduos">close</i></span>
     <p class="text-left p-0 abrir d-none"><i class="material-icons vresiduos">home</i></p>
        <p class="text-center">Venda seu residuo</p>
    </div>


</body>

</html>