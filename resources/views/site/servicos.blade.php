@extends('template')

@section('conteudo')
<section class="painel-servicos">
    <div style="height:100%" class="preto-50 text-white text-center">
        <h3 style="padding-top:80px;">Serviços</h3>

    </div>
</section>
<section>
    <div class="pl-5 pt-2">
        <a href="./" class="link"> Home </a> | Serviços
    </div>
    <hr>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3>Como Trabalhamos</h3>
        </div>
        <div class="col-sm-6">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea aut, ad eveniet dicta dolorum iure perferendis error. Saepe eos dolorem ab laudantium vitae quia impedit, odio ut cupiditate sunt assumenda</h4>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores similique quibusdam laboriosam quae quidem dolorum id eos adipisci voluptatibus eius cupiditate maxime sunt doloribus, minus alias ducimus aspernatur cumque. Dolorem.
            </p>
        </div>
        <div class="col-sm-6">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia pariatur et cupiditate reprehenderit asperiores sint repudiandae voluptate ex, consequatur incidunt impedit quos alias temporibus voluptatum odit hic architecto ullam ipsum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>
        <div class="col-sm-2">
            <img src="/imagens/icon-tservico.jpg" alt="" width="100%">
        </div>

    </div>
</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop