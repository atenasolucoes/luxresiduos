 @extends('template')

 @section('conteudo')

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
                 <h5>Meio Ambiente </h5>
                 <p class="text-justify">
                     A Lux Resíduos possui experiência e competência para te auxiliar em alguns assuntos: Licenciamento Ambiental; Planos de Controle Ambienta -PCA; Planos de Recuperação de Áreas Degradadas - PRAD; Planos de Gerenciamento de Resíduos Sólidos - PGRS, entre outros;
                     <a href="#" class="text-success">Ver mais</a>
                 </p>


             </div>
             <div class="col-sm-3">
                 <img src="/imagens/seguranca.png" alt="" width="100px">
                 <h5>Segurança do Trabalho </h5>
                 <p class="text-justify">
                     Te ajudamos no cumprimento da Lei, prevenção de riscos, redução de acidentes, primeiros socorros, entre outros.
                     <a href="#" class="text-danger">Ver mais</a>
                 </p>

             </div>
             <div class="col-sm-3 ">
                 <img src="/imagens/engenharia.png" alt="" width="100px">
                 <h5>Engenharia Ambiental</h5>
                 <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officia iure modi molestiae provident aperiam ducimus quidem exercitationem reiciendis necessitatibus tenetur id asperiores ab, officiis perferendis fuga sapiente dolores eos!
                     <a href="#" class="text-warning">Ver mais</a>
                 </p>


             </div>
             <div class="col-sm-3 ">
                 <img src="/imagens/gerenciamento.png" alt="" width="100px">
                 <h5>Gerenciamento de Resíduos</h5>
                 <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi officia iure modi molestiae provident aperiam ducimus quidem exercitationem reiciendis necessitatibus tenetur id asperiores ab, officiis perferendis fuga sapiente dolores eos!
                     <a href="#" class="text-info">Ver mais</a>
                 </p>


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

         $(".loading").fadeOut("slow");



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
         z-index: 99999;
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

 </div>
 @stop