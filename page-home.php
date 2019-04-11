                      <div class="bk">

  <!------------------------------ CONTEÚDO DA PÁGINA --------------------------------->
    
        <section class="container">
 
 <section class="mt-100">
    <div class="row text-center">
        <div class="col section-title">
         <h1>Qual a rota de hoje?</h1>
    </div> 
    </div>
    


<div class="row mt-100 section-lugares ">
     <div class="owl-carousel owl-theme owl-carousel-rvd-card">
   <?php for ($i = 0; $i < 3; $i++) { ?>
    <div class="col- col-lg-4-  mt-5 ">
       <a href="#">
           <div class="card rdv-card  img-gradient food-gradient-mask">
  <img src="./assets/img/img/baiao-1.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Bares & Restaurantes</h1>
    <p class="card-text">Ofertas com até 35% OFF</p>
    <p class="tag-card">#QueroComer</p>
  </div>
</div>
       </a>
        
    </div>
    <?php } ?>
    </div>
</div>

<div class="row ">
   <div class="owl-carousel owl-carousel-rvd-card-mini owl-theme">
   
   
   <?php for ($i = 0; $i < 4; $i++) { ?>
    <div class=" mt-1">
        <a href="#">
        <div class="card rdv-card-mini text-white img-gradient night-gradient-mask">
  <img src="./assets/img/img/apart-1.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Hotéis & Pousadas</h1>
    <p class="card-text">Ofertas com até 35% OFF</p>
    <p class="tag-card">#Onde Ficar</p>
  </div>
</div>
    </a>
    </div>
    <?php } ?>
 </div>
</div>
 </section>

    
<!-- DESTAQUES DA REGIÃO - COISAS INTERESSANTES -->

  <section class="section-destaques-da-regiao ">
  
 <div class="row mt-100 mb-100 text-center">
     <div class="col section-title">
               <h1>Algumas coisas legais
da região</h1>
     </div>
 </div>
   
  <div class="row mt-5 ">
   <div class="owl-carousel owl-carousel-big-card owl-theme ">
    <?php for ($i = 0; $i < 3; $i++) { ?>
    <div class="col- col-lg-4- rdv-card-big card-lift--hover big-cards mb-4 mt-5">
      <a href="/rota/">
        <div class="card text-white img-gradient default-gradient-mask">
  <img src="./assets/img/img/samba-de-veio-1.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Cultura</h1>
    <p class="card-text">Curiosidades culturais do valle</p>
    <p class="tag-card">#VamosMostrarCultura</p>
  </div>
</div>
         </a>
    </div>
      <?php } ?>  
  </div>
      </div>

</section>  
<!--// DESTAQUES DA REGIÃO-->

<!-- BLOG AREA -->
<section class="rdv-blog-section mt-150">

    <div class="row mb-100">
        <div class="col col-lg-10 section-title section-title-left rdv-md-title">
         <h1>/BLOG</h1>
    </div>  
       
        <div class="col col-lg-2">
        <div class="section-title-left">
  <p><a href="/rotadovalle/page-ofertas.php">Ver blog</a></p>
</div>
    </div>  
    </div>
  <div class="row">
   <?php for ($i = 0; $i < 4; $i++) { ?>
   
   
<div class="col col-lg-3 blog-cards">
   <div class="tile img-gradient default-gradient-mask"> 
  <img src='https://images.unsplash.com/photo-1458668383970-8ddd3927deed?dpr=1&auto=format&crop=entropy&fit=crop&w=1500&h=1004&q=80'/>
  <div class="text">
  <h1 class="">Guia: 5 Lugares para você aproveitar o pôr do sol no vale.</h1>
<!--  <h2 class="animate-text">Guia: 5 Lugares para você aproveitar o pôr do sol no vale.</h2>-->
  <p class="animate-text">Bacon ipsum dolor amet pork belly tri-tip turducken, pancetta bresaola pork chicken meatloaf...<n>ver no blog.</n></p>
<div class="dots">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
 </div> 
</div>
  

<!--
     <div class=" col col-lg-3 col-sm-6 rdv-card-blog card-lift--hover mb-4">
       <div class="card text-white">
        <a href="/rotadovalle/page-cat.php">
 <img src="img/por-do-sol-1.png" class="card-img"  alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Guia: 5 lugares para você aproveitar o pôr do sol no vale</h5>
    <span  class="post-autor-img" ><img src="assets/img/theme/eu0lanterna.png" alt=""> <p>Por Daniel Franco</p></span>
  </div>
  </a>
</div>    
  </div>
-->
  <?php } ?> 
</div>  


</section>

<!--//BLOG AREA -->

    </section><!-- /.container -->


<!--PARA O MENU EM PERSPECTIVA FUNCIONAR O FINAL DE CADA PÁGINA PRECISA SER ASSIM-->
  <?php include "./template-parts/footer-content.php";?> 
		</div> 
