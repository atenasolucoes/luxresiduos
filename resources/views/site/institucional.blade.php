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

<section class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <h3>Quem somos</h3>
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
        <div class="col-sm-4">
            <h3>Missão</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, molestiae! Officiis, odit. Dolores deserunt corporis, magnam maxime soluta, aliquam ea tempora dolor fuga velit molestiae, ad perferendis voluptate illum excepturi.</p>
        </div>
        <div class="col-sm-4">
            <h3>Visão</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptatibus fugit sint. Magnam repellendus aperiam perferendis accusantium? Minima fugiat molestiae aut impedit. Sapiente nemo nam inventore dolorem eveniet molestiae quod!</p>
        </div>
        <div class="col-sm-4">
            <h3>Valores</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique sed ipsam aliquid autem nihil deleniti veniam incidunt beatae deserunt fuga debitis, ipsa reiciendis tempore quam corrupti accusantium officia cumque sequi?</p>
        </div>

    </div>
</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop