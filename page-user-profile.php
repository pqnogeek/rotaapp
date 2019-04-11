

<!--Contém o código inical de cada página + o conteúdo do menu de navegação da página-->
    <?php include "header.php" ;?>
<!--/header	<!-- pages stack - Para o Menu em perspectiva funcionar o conteúdo precisa estar dentro de pages-stack -> page -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
  
   <!-- CONTEÚDO DA PÁGINA -->
 <div class="bk">
      <main class="profile-page">
    <section class="section-profile-cover section-shaped my-0">
      <div class="shape shape-style-1 shape-primary shape-skew alpha-4">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <section class="section section-skew">
      <div class="container">
        <div class="card card-profile shadow mt--400">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="./assets/img/theme/franco.eu%20-%20avatar2%20-%201080x1080.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="#historicoDeCupons" class="btn btn-sm btn-info mr-4">Histórico</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Sair</a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">22</span>
                    <span class="description">Cupons Gerados</span>
                  </div>
             
                  <div>
                    <span class="heading">19</span>
                    <span class="description">Locais Avaliados</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3>Daniel Franco
                <span class="font-weight-light">, 24</span>
              </h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Petrolina, Pernambuco</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>franco.oliveira@outlook.com</div>
              <div><i class="ni education_hat mr-2"></i>Membro desde 26/03/2019</div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
                  <a href="#">Editar/Atualizar Perfil</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

 <section id="historicoDeCupons" class="container rdv-section-title mt-5">
 <div class="row justify-content-center text-center">
       <h2>Seu Histórico de Cupons Gerados</h2>
 </div>


 <section  class="mt-5">
          <div class="row justify-content-center h-cupons-area">
         
<?php for ($i = 0; $i < 4; $i++) { ?>
        
   <div class="col col-lg-3 card-wide-control "> 
   <!-- Card -->
<a href="#page-oferta">
    <div class="card card-hover rdv-card-wide  img-gradient night-gradient-mask">
  <!-- Card image -->
     <img class="card-img" src="https://mdbootstrap.com/img/Photos/Others/food.jpg" alt="">
  <div class="card-img-overlay">
    <!-- Card content -->
  <div class="card-body text-white">
    <h4 class="card-title">Combo 8 Skol Senses</h4>
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

    <div class="mt-100">
     <ul class="pagination">
     <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
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
        <span class="sr-only">Next</span>
      </a>
    </li>
      </ul>
    </div>
 </section>
     <?php include "./template-parts/footer-content.php";?>  
 </div>  
	<!-- /CONTEÚDO DA PÁGINA -->
	
	<!-- /page -->
	</div>
	
    <!--PARA O MENU EM PERSPECTIVA FUNCIONAR O FOOTER CONTENT PRECISA ESTAR ANTES DO FECHAMENTO DA DIV PAGES STACK-->
  <?php include "./template-parts/footer-content.php";?>  
	
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

</body>

</html>


