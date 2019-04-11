
<!--Contém o código inical de cada página + o conteúdo do menu de navegação da página-->
    <?php include "header.php" ;?>
<!--/header2-->

<div class="modal-area">
     <!-- Modal - GERADOR DE CUPOM -->
<div class="modal  animated fadeInDown" id="cupomModal"  tabindex="-1" role="dialog" aria-labelledby="cupomModalTitle" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content cupom-card  ">
<!-- Cupom Card image -->
<!--     <img class="card-img" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="">-->
<div class=" card-cupom-img  img-gradient night-gradient-mask">
  <!-- Card image -->
     <img class="card-img-top" src="assets/img/ofertas/exemplo-skolsenses-1.png" alt="">
  <div class="card-img-overlay">
    <!-- Card content -->
  <div class="text-white">
    <h4 class="card-title">Combo 8 Skol Senses</h4>
    <p class="text-card card-cupom-img-p">BarTube</p>
  </div> 
  </div>
    
    </div>
  <!-- cupom card content -->
  <div class="modal-body">
<p class="card-text text-center">Válido até ás 22h de hoje (Segunda-Feira)</p>
   <h4 class="card-title text-center">Cupom Gerado Para</h4>
    <p class="card-text text-center">
    Daniel Franco<br>
    franco.oliveira@outlook.com
    </p>
     
     <div class="cupomStyle">
          <h4 class="card-title">Código: 0101508041947</h4>
    <p class="card-text">Confirme abaixo e apresente este cupom no estabelecimento ( mostre esta tela ou tire um print) e resgate sua oferta com desconto.</p>
     </div>
     
    <h4 class="card-title">Valor sem desconto : <span class="card-text">  R$ 48,00</span></h4>
    
    <h4 class="card-title">Desconto de:<span class="card-text">  30%</span></h4>
    
     <h4 class="card-title">Você vai pagar: <span class="card-text">  R$ 33,60</span></h4>
  
      <h4 class="card-title">Local:  <span class="card-text">   Av. da Integração, 710, Villa Eduardo, Petrolina - PE</span></h4>

    
          <h4 class="card-title pt-3">Se Liga!</h4>
    <p class="card-text pt-2">Para o resgate da oferta é necessário apresentação do código do cupom e do RG para resgate de bebida alcóolica e produtos destinados para maiores de 18 anos. Não é necessária a impressão do cupom. Você pode visualizar os cupons gerados acessando seu perfil. </p>
       
     <p class="card-text text-center info-small cinza pt-3">Clique em confirmar para validar este cupom em seu nome. Ou cancele para ver outras ofertas.</p>
  </div>
      <div class="modal-footer">           
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Confirmar Cupom</button>
      </div>
    </div>
  </div>
</div>	

</div>

	<!-- pages stack - Para o Menu em perspectiva funcionar o conteúdo precisa estar dentro de pages-stack -> page -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
			
<!--	Header global - logo e caixa de pesquisa-->
 <?php include "./template-parts/header-global.php" ;?>
<!-- Circulos de ofertas em destaque-->
 <?php include "tp-ofertas-em-destaque.php" ;?>
 <!-- /Circulos de ofertas em destaque-->
  
   <!-- CONTEÚDO DA PÁGINA -->
<!--   div class bk garante que o background do body fique abaixo do bacground dos blocos de conteúdo-->
   <div class="bk">
   
   
 <section class="container">  
       
<section class="section-title-sm mt-50">
 <div class="row justify-content-center">
 <h1>Veja as ofertas disponíveis em:</h1>
    <h2 class="section-title-cat-info"> Bares &amp; Reataurantes</h2>
    </div>
    
</section>
   
   <div class="row justify-content-center card-view-control section-ofertas-cards">
<?php for ($i = 0; $i < 3; $i++) { ?>
    <div class="col col-lg-4 card-view-control  mt-5 ">
       <a href="#">
           <div class="card rdv-card  img-gradient night-gradient-mask ">
  <img src="assets/img/ofertas/exemplo-heineken.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h1 class="card-title">Combo 6 Heineken</h1>
    <p class="card-text">Cupom com 35% OFF</p>
    <p class="tag-card">BarTube</p>
    <p><a href="#" class="btn btn-hide btn-black"  data-toggle="modal" data-target="#cupomModal">Gerar Cupom</a></p> 
  </div>
</div>
       </a>   
    </div>
   <?php } ?> 
      
    </div>
 
 <section class="mt-3">
          <div class="row justify-content-center">
         
<?php for ($i = 0; $i < 4; $i++) { ?>
        
   <div class="col col-lg-3 card-wide-control "> 
   <!-- Card -->
<a href="#page-oferta">
    <div class="card card-hover rdv-card-wide  img-gradient night-gradient-mask">
  <!-- Card image -->
     <img class="card-img" src="assets/img/ofertas/exemplo-skolsenses-1.png" alt="">
  <div class="card-img-overlay">
    <!-- Card content -->
  <div class="card-body text-white">
    <h4 class="card-title">Combo 8 Skol Senses</h4>
     <a href="#" class="btn btn-hide btn-black"  data-toggle="modal" data-target="#cupomModal">Gerar Cupom</a>
  </div>
  <!-- Modal -->
  <!-- Card footer -->
  <div class="card-wide-footer rounded-bottom  lighten-3 text-left pl-4">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 card-wide-det "><i class="far fa-grin-stars"></i> +570</li>
      <li class="list-inline-item pr-2 card-wide-det"><i class="fa fa-frown"></i> -38</li>
    </ul>
  </div> 
  </div>
    
    </div>
</a> 

</div>
<!-- Card -->
      <?php } ?>        
        
        </div>

 </section>
     


<div class="pagination mt-100">
    
</div>
     <ul class="pagination mt-300 ">
     <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Anterior</span>
      </a>
    </li>
       <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
     <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
      <a class="page-link" href="#">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Próximo</span>
      </a>
    </li>
      </ul>
  
 </section>
	<!-- /CONTEÚDO DA PÁGINA -->
	    <?php include "./template-parts/footer-content.php";?>  
	<!-- /page -->
	</div>

    <!--PARA O MENU EM PERSPECTIVA FUNCIONAR O FOOTER CONTENT PRECISA ESTAR ANTES DO FECHAMENTO DA DIV PAGES STACK-->
 
        </div>   
    
<!-- /pages-stack -->	 

</div> 
<!-- /pages-stack -->
 	
 	
 	
 	<!--PARA O MENU EM PERSPECTIVA FUNCIONAR OS SCRIPTS PRECISAM ESTAR NO FINAL DE CADA PÁGINA -->
   <script src="./assets/js/classie.js"></script>
   <script src="./assets/js/main.js"></script>
	
   <script src="script.js"></script>

  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
  <!-- javascript owl-->
    <script src="./assets/js/owl.carousel.js"></script>  

<script>
$('.owl-destaq-ofertas').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    responsive:{
        0:{
            items:2
        },
           359:{
            items:3
        },
        540:{
            items:4
        },
        740:{
            items:6
        },
    }
    });
</script>

</body>

</html>