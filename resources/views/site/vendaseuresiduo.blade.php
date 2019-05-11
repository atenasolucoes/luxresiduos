@extends('template')

@section('conteudo')
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

        <div class="col-sm-6">
            <img src="/imagens/orcamento.png" class="w-100" alt="">
        </div>
        <div class="col-sm-6">

        </div>
      
        <div class="col-sm-12 text-center">
            <hr>
            <img src="/imagens/reciclaveis.png" width="100px;" alt="">
            <h3>Resíduos Recicláveis</h3>
        </div>
    </div>

</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop