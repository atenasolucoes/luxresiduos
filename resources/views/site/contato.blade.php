@extends('template')

@section('conteudo')

@inject('conteudo', 'luxresiduos\Site')
@php
$site = $conteudo->all()->first();
$zap = str_replace(array('-', '(', ')', ' '), '', ''.$site->contato_whatsapp.'');
@endphp
<section class="painel-contato">
    <div style="height:100%" class="preto-50 text-white text-center">
        <h3 style="padding-top:80px;">Contato</h3>

    </div>
</section>
<section>
    <div class="pl-5 pt-2">
        <a href="./" class="link"> Home </a> | Contato
    </div>
    <hr>
</section>

<section class="container-fluid">
    <div class="row">

        <div class="col-sm-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1008150.2082113988!2d-41.84570687827207!3d-9.236539003818372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x773e7a0e309d2c7%3A0x1876ac418ba166da!2sCasa+Nova+-+BA%2C+47300-000!5e0!3m2!1spt-BR!2sbr!4v1556468600647!5m2!1spt-BR!2sbr" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
            <p>
                <b>Telefone:</b>@isset($site)<?php echo $site->contato_telefone; ?>@endisset
            </p>
            <p>
                <b>WhatsApp:</b>@isset($site)<?php echo $site->contato_whatsapp; ?>@endisset | <a href="https://api.whatsapp.com/send?phone=55{{$zap}}"> Conversa agora! </a>
            </p>
            <p>
                <b>Email: </b> @isset($site)<?php echo $site->contato_email; ?>@endisset
            </p>
            <p>
                <b>Endereço: </b> @isset($site)<?php echo $site->contato_endereco; ?>@endisset
            </p>
            <p>
                <a href="https://tawk.to/chat/5ccbc375d07d7e0c6391b025/default" target="_blank" class="btn btn-block  btn-success">Clique aqui para contato via chat</a>
            </p>
        </div>
    </div>

</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop