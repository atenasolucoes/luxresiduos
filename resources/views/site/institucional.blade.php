@extends('template')

@section('conteudo')
<section class="painel-institucional">
    <div style="height:100%" class="preto-50 text-white text-center">
        <h3 style="padding-top:80px;">Institucional</h3>

    </div>
</section>
<section>
    <div class="pl-5 pt-2">
        <a href="./" class="link"> Home </a> | Institucional
    </div>
    <hr>
</section>

<section class="container-fluid quemsomos">
    <div class="row">
        <div class="col-sm-12 text-center">
            <img src="/imagens/icon.png" alt="" width="70px">
            <h3>Quem somos</h3>
            <h4 class="text-justify">
                A LUX RESIDUOS é uma empresa no segmento de engenharia ambiental e
                segurança do trabalho com enfoque no gerenciamento de resíduos que possibilita
                garantir a sustentabilidade dos clientes através da parceria equilibrada e sustentável,
                primando pela responsabilidade socioambiental e respeito à legislação.
            </h4>
        </div>



    </div>
    <hr>
    <div class="row text-center">
        <div class="col-sm-4">
            <img src="/imagens/i1.png" alt="" width="30px;">
            <h3>Missão</h3>
            <p>Proporcionar aos nossos clientes eficiência e destinação correta dos resíduos,
                primando pela responsabilidade socioambiental.</p>
        </div>
        <div class="col-sm-4">
            <img src="/imagens/i2.png" alt="" width="30px;">
            <h3>Visão</h3>
            <p>A empresa possui uma postura de responsabilidade com os valores ambientais e
                sociais. Além de fundamentada na preservação do meio ambiente e melhoria da
                qualidade de vida das pessoas</p>
        </div>
        <div class="col-sm-4">
            <img src="/imagens/i3.png" alt="" width="30px;">
            <h3>Valores</h3>
            <p>Ser empresa sustentável provedora de soluções para destinação correta de
                resíduos.</p>
        </div>

    </div>
</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop