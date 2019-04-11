

<!--Contém o código inical de cada página + o conteúdo do menu de navegação da página-->
    <?php include "header.php" ;?>
<!--/header	<!-- pages stack - Para o Menu em perspectiva funcionar o conteúdo precisa estar dentro de pages-stack -> page -->
	<div class="pages-stack">
		<!-- page -->
		<div class="page" id="page-home">
  
   <!-- CONTEÚDO DA PÁGINA -->
 <div class="bk">

      <section class="section-profile-cover section-shaped my-0">
             <div class="header bg-gradient-primary- py-7 py-lg-8">
      <div class="container">
        <div class="header-body pt-60 text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 section-title-sm">
              <h2 class="text-white">Bem-vindo ao Rota!</h2>
              <p class="text-lead text-light">Registre-se ou faça login. Se você é um parceiro do Rota, acesse a Área do Parceiro.</p>
            </div>
          </div>
        </div>
      </div>
     
    </div>
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

    <!-- Page content -->
    <div class="container mt--300 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-7">
          <div class="card z-index-x bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><small>Fazer login com</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="./assets/img/icons/common/facebook96.svg"></span>
                  <span class="btn-inner--text">Facebook</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="./assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Ou entre com seu e-mail e senha</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="E-mail" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Senha" type="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Lembrar</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Entrar</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Esqueceu a senha?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="#" class="text-light"><small>Criar novo perfil</small></a>
            </div>
          </div>
        </div>
      </div>
    </div>
     <?php include "./template-parts/footer-content.php";?>  
 </div>  
	<!-- /CONTEÚDO DA PÁGINA -->
	
	<!-- /page -->
	</div>
	
    <!--PARA O MENU EM PERSPECTIVA FUNCIONAR O FOOTER CONTENT PRECISA ESTAR ANTES DO FECHAMENTO DA DIV PAGES STACK-->
    <div class="ocultar"> <?php include "./template-parts/footer-content.php";?>  </div>
 
	
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