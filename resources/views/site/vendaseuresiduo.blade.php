@extends('template')

@section('conteudo')

@inject('conteudo', 'luxresiduos\Site')
@php
$site = $conteudo->all()->first();
@endphp

<section class="painel-contato vendaresiduos">
    <div style="height:100%" class="preto-50 text-white text-center">
        <h3 style="padding-top:80px;">Venda seu Resíduo</h3>

    </div>
</section>
<section>
    <div class="pl-5 pt-2">
        <a href="./" class="link"> Home </a> | Venda seu Resíduo
    </div>
    <hr>
</section>

<section class="container-fluid">
    <div class="row">

        <div class="col-sm-6 text-center p-5">
            <a href="/contato"> <img src="/imagens/orcamento.png" style="width: 400px; max-width: 100%"></a>
        </div>
        <div class="col-sm-6">
            <h2 class="p-5 text-justify">
                @isset($site)
                <?php echo $site->venda_texto; ?>
                @endisset
                <!-- Lucrar com seu resíduo nunca foi tão fácil, veja na lista abaixo quais resíduos podem ter dar lucro. -->
            </h2>


        </div>


        <div class="col-sm-12 text-center mb-1">
            <hr>
            {{-- <img src="/imagens/reciclaveis.png" width="100px;" alt=""> --}}
            <h1>Resíduos Recicláveis</h1>
        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/plastico.png" width="50px" alt="">
            <h4>Plástico</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/metal.png" width="50px" alt="">
            <h4>Metais</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/papel.png" width="50px" alt="">
            <h4>Papel e papelão</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/vidro.png" width="50px" alt="">
            <h4>Vidro</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/madeira.png" width="50px" alt="">
            <h4>Madeira</h4>


        </div>

        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/plastico.png" width="50px" alt="">
            <h4>Borracha</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/metal.png" width="50px" alt="">
            <h4>Sucata em geral</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/organico.png" width="50px" alt="">
            <h4>Orgânicos</h4>

        </div>
        <div class="col-sm-3 text-center mt-5">
            <img src="/imagens/organico.png" width="50px" alt="">
            <h4>Sobras de produtos</h4>

        </div>
    </div>

</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop