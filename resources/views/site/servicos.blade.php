@extends('template')

@section('conteudo')
<section class="painel-servicos">
    <div style="height:100%" class="preto-50 text-white text-center">
        <h3 style="padding-top:80px;">Nossos serviços</h3>

    </div>
</section>
<section>
    <div class="pl-5 pt-2">
        <a href="./" class="link"> Home </a> | Nossos serviços
    </div>
    <hr>
</section>

<section class="container-fluid">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h3>Trabalhamos no segmento de engenharia ambiental e
                segurança do trabalho com enfoque no gerenciamento e destinação de resíduos para a preservação ambiental</h4</h3> </div> </div> <div class="container-fluid mt-3">
                <div class="row text-center">
                    <div class="col-sm-3 meioambiente">
                        <img src="/imagens/meioambiente.png" alt="" width="100px">
                        <h5>Engenharia ambiental </h5>
                        <hr>
                        <p> Licenciamento Ambiental</p>
                        <p>Planos de Controle Ambienta -PCA</p>
                        <p> Planos de Recuperação de Áreas Degradadas - PRAD</p>
                        <p> Planos de Gerenciamento de Resíduos Sólidos - PGRS</p>
                        <p> Relatório de Controle Ambiental - RCA</p>
                        <p> Relatório Ambiental Preliminar - RAP</p>
                        <p> Consultoria e Assessoria Ambiental</p>
                        <p> Cumprimento de Condicionantes</p>
                        <p> Cadastro Ambiental Rural - CAR</p>
                        <p> Inventário Florestal</p>
                        <p>Outorga D´água</p>
                        <p>Estudos de Fauna e Flora</p>
                        <p> Auditoria e Perícia Ambiental</p>
                        <p> Gestão Ambiental</p>
                        <hr>
                    </div>
                    <div class="col-sm-3 seguranca">
                        <img src="/imagens/seguranca.png" alt="" width="100px">
                        <h5>Segurança do Trabalho </h5>
                        <hr>
                        <p>Prontuário e Treinamento da NR20</p>
                        <p>NR 23 brigada de incêndio</p>
                        <p>NR 33 espaço confinados</p>
                        <p>Primeiros Socorros</p>
                        <p>Direção defensiva (condução segura de veículos)</p>
                        <p>Programas de Segurança do Trabalho</p>
                        <p>PPRA</p>
                        <p>PCMSO</p>
                        <p>LTCAT</p>
                        <hr>
                    </div>
                    <div class="col-sm-3 engenharia ">
                        <img src="/imagens/engenharia.png" alt="" width="100px">
                        <h5>Engenharia</h5>
                        <hr>
                        <p>Projeto Arquitetônico</p>
                        <p>Projeto Hidro Sanitário</p>
                        <p> Projeto Elétrico</p>
                        <p> Sist. de Prot. contra Descargas Atmosféricas - SPDA</p>
                        <p> Projeto de Proteção contra Incêndio e Pânico</p>
                        <p> Projeto Estrutural</p>
                        <p>Aterro Sanitário</p>

                        <hr>
                    </div>
                    <div class="col-sm-3 gresiduo">
                        <img src="/imagens/gerenciamento.png" alt="" width="100px">
                        <h5>Gerenciamento de Resíduos</h5>
                        <hr>
                        <p>
                            Coleta
                        </p>
                        <p>
                            Acondicionamento
                        </p>
                        <p>
                            Disposição final
                        </p>

                        <hr>
                    </div>


                </div>

        </div>
</section>

<script>
    $(".barra").css("position", "relative").addClass('navbar-light');
</script>

@stop