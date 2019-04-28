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
                                <a class="nav-link" href="#">Venda seu resíduo</a>
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
    <section class="info p-5  text-center">
        <h4>Sua referência sobre gerenciamento e destinação de resíduos para a preservação ambiental<h4>
                <h5> Satisfazer as necessidades do presente sem comprometer a capacidade das gerações futuras de satisfazer as próprias necessidades!</h5>
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="col-sm 4 ">
                            <img src="/imagens/icon.png" alt="" width="50px">
                            <h5>Item 1</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officia iure modi molestiae provident aperiam ducimus quidem exercitationem reiciendis necessitatibus tenetur id asperiores ab, officiis perferendis fuga sapiente dolores eos!</p>
                        </div>
                        <div class="col-sm 4 ">
                            <img src="/imagens/icon.png" alt="" width="50px">
                            <h5>Item 1</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officia iure modi molestiae provident aperiam ducimus quidem exercitationem reiciendis necessitatibus tenetur id asperiores ab, officiis perferendis fuga sapiente dolores eos!</p>
                        </div>
                        <div class="col-sm 4 ">
                            <img src="/imagens/icon.png" alt="" width="50px">
                            <h5>Item 1</h5>
                            <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officia iure modi molestiae provident aperiam ducimus quidem exercitationem reiciendis necessitatibus tenetur id asperiores ab, officiis perferendis fuga sapiente dolores eos!</p>
                        </div>


                    </div>

                </div>
    </section>

    <section class="vendaresiduos">
        <div class="preto-50 text-center p-3 text-white" style="height:100%;">
            <p class="mx-auto" style="border-radius:100%; background-color:whitesmoke; width:150px; overflow:hidden;">
                <img src="/imagens/fabricaverde.png" alt="" style="width: 150px;"></p>
            <h3>Descubra como pode ser fácil destinar os resíduos da sua empresa</h3>
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
                    $(".barra-menu").removeClass("navbar-dark");
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

            $(".vresiduos").click(function() {
                $(".venda").animate({
                    right: "-270px"
                });
                $(".abrir").removeClass("d-none");
            });

            $(".abrir").click(function() {
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
            top: 150px;
            height: 250px;
            width: 300px;
            border: 1px solid white;
        }

        .vresiduos {
            cursor: pointer;
        }

        .abrir {
            position: absolute;
            left: 5px;
            top: 100px;

        }
    </style>
    <div class="venda text-right ">
        <span><i class="material-icons vresiduos">close</i></span>
        <p class="text-left p-0 abrir d-none"><i class="material-icons vresiduos">arrow_back_ios</i></p>
        <p class="text-center">Venda seu residuo</p>
    </div>
    <footer class="p-5">
        Copyright {{date('Y')}} - Todos os direitos reservados! - Desenvolvido por Herbet Jr. | Atena Agência
    </footer>

</body>

</html>