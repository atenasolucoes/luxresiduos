 @extends('template')

 @section('conteudo')
 @inject('conteudo', 'luxresiduos\Site')
 @php
 $site = $conteudo->all()->first();
 @endphp
 <section style="background-color: rgba(0,0,0,0)">
     <div class="painel container-fluid">


     </div>
 </section>
 <section class="info p-5  text-center">
     <h4>Sua referência no segmento de engenharia ambiental e
         segurança do trabalho com enfoque no gerenciamento e destinação de resíduos para a preservação ambiental</h4>

     <div class="container-fluid mt-3">
         <div class="row">
             <div class="col-sm-3">
                 <img src="/imagens/meioambiente.png" alt="" width="100px">
                 <h5>Engenharia Ambiental </h5>
                 <div class="text-justify">
                     @isset($site)
                     <?php echo $site->home_eng_ambiental; ?>
                     @endisset
                     <!-- A Lux Resíduos possui experiência e competência para te auxiliar em alguns assuntos: Licenciamento Ambiental; Planos de Controle Ambienta -PCA; Planos de Recuperação de Áreas Degradadas - PRAD; Planos de Gerenciamento de Resíduos Sólidos - PGRS, entre outros; -->
                     <a href="/servicos" class="text-success">Ver mais</a>
                 </div>


             </div>
             <div class="col-sm-3">
                 <img src="/imagens/seguranca.png" alt="" width="100px">
                 <h5>Segurança do Trabalho </h5>
                 <div class="text-justify">
                     @isset($site)
                     <?php echo $site->home_seguranca; ?>
                     @endisset
                     <!-- Te ajudamos no cumprimento da Lei, prevenção de riscos, redução de acidentes, primeiros socorros, entre outros. -->
                     <a href="/servicos" class="text-danger">Ver mais</a>
                 </div>

             </div>
             <div class="col-sm-3 ">
                 <img src="/imagens/engenharia.png" alt="" width="100px">
                 <h5>Engenharia</h5>
                 <div class="text-justify">
                     @isset($site)
                     <?php echo $site->home_engenharia; ?>
                     @endisset
                     <!-- Projeto Arquitetônico;
                     Projeto Hidro Sanitário;
                     Projeto Elétrico;
                     Sist. de Prot. contra Descargas Atmosféricas - SPDA; -->
                     <a href="/servicos" class="text-warning">Ver mais</a>
                 </div>


             </div>
             <div class="col-sm-3 ">
                 <img src="/imagens/gerenciamento.png" alt="" width="100px">
                 <h5>Gerenciamento de Resíduos</h5>
                 <div class="text-justify">
                     @isset($site)
                     <?php echo $site->home_gerenciamento; ?>
                     @endisset
                     <!-- Coleta, acondicionamento e disposição final de resíduos -->
                     <a href="/servicos" class="text-info">Ver mais</a>
                 </div>


             </div>


         </div>

     </div>
 </section>

 <section class="vendaresiduos">
     <a href="/vendaseuresiduo">
         <div class="preto-50 text-center p-3 text-white" style="height:100%;">
             <p class="mx-auto" style="border-radius:100%; background-color:whitesmoke; width:150px; overflow:hidden;">
                 <img src="/imagens/fabricaverde.png" alt="" style="width: 150px;"></p>
             <h3>Descubra como pode ser fácil destinar os resíduos da sua empresa</h3>

         </div>
     </a>
 </section>
 <section class="solucao container-fluid p-5">
     <div class="pt-3 pb-3 text-center">
         <h3>A SOLUÇÃO IDEAL PARA O GERECIAMENTO DE RESÍDUOS SÓLIDOS NA SUA EMPRESA</h3>
     </div>
     <div class="row">
         <div class="col-sm-3 text-center">
             <img src="/imagens/coleta-agenda.png" alt="" style="width:100px; height:100px;">
             <p>COLETA AGENDADA DE RESÍDUOS SOLIDOS</p>

         </div>
         <div class="col-sm-2 text-center">
             <img src="/imagens/armazenamento.png" alt="" style="width:100px; height:100px;">
             <p>ARMAZENAMENTO ADEQUADO PARA TODAS AS CLASSES DE RESÍDUOS </p>

         </div>
         <div class="col-sm-2 text-center">
             <img src="/imagens/descaracterizacao.png" alt="" style="width:100px; height:100px;">
             <p>DESCARACTERIZAÇÃO DOS RESÍDUOS</p>

         </div>
         <div class="col-sm-2 text-center">
             <img src="/imagens/descarte.png" alt="" style="width:100px; height:100px;">
             <p>DESCARTE E DESTINAÇÃO FINAL CORRETA PARA CADA TIPO DE RESÍDUO</p>
         </div>
         <div class="col-sm-3 text-center">
             <img src="/imagens/doc.png" alt="" style="width:100px; height:100px;">
             <P>EMISSÃO DE TODA DOCUMENTAÇÃO NECESSÁRIA</p>

         </div>

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
         background-image: url("/imagens/clique.png");
         background-position: center;
         background-size: contain;
         color: white;
         position: fixed;
         right: -300px;
         top: 150px;
         height: 250px;
         width: 300px;
         border: 1px solid white;
         z-index: 99999;
         padding-left: 50px;
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
     <span><i class="material-icons vresiduos bg-dark">close</i></span>
     <p class="text-left p-0 abrir d-none"><i class="material-icons vresiduos">arrow_back_ios</i></p>

     <a href="/vendaseuresiduo">
         <div style="height:100%;">

         </div>
     </a>

 </div>

 <style>
     .loading {
         width: 100%;
         height: 100%;
         position: fixed;
         top: 0px;
         background-color: white;
         z-index: 99999;
         text-align: center;

     }

     .img-load {
         width: 150px;
         margin-top: 150px;
     }
 </style>

 <div class="loading">
     <img src="/imagens/icon.png" alt="" class="img-load">
     <h3 class="text-success">Carregando...</h3>

 </div>
 <script>
     $(document).ready(function() {
         setInterval(() => {
             $(".loading").fadeOut("slow");
         }, 2000);

     })
 </script>
 @stop