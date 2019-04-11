<!--Contém o código inical de cada página + o conteúdo do menu de navegação da página-->
    <?php include "./header.php" ;?>
<!--/header2-->
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
    <?php include "./page-home.php";?>  
	<!-- /CONTEÚDO DA PÁGINA -->
	
	<!-- /page -->
	</div>
<!-- /pages-stack -->	 
</div> 
<!-- /pages-stack -->
 	
 	
 	
 	<!--PARA O MENU EM PERSPECTIVA FUNCIONAR OS SCRIPTS PRECISAM ESTAR NO FINAL DE CADA PÁGINA -->
        
   <script src="./assets/js/classie.js"></script>
   <script src="./assets/js/main.js"></script>
	
   <script src="script.j"></script>
  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>

            
	

<!-- javascript owl-->
    <script src="./assets/js/owl.carousel.js"></script>  
    <script type="application/javascript">
$('.owl-carousel-rvd-card').owlCarousel({
    loop:true,
    margin: -8,
    nav:false,
    responsive:{
        0:{
            items:1,
            
        },
           340:{
            items:2
        },
        840:{
            items:3
        },
    }
    });
        
    $('.owl-carousel-big-card').owlCarousel({
    loop:true,
    margin: 10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
           540:{
            items:2
        },
        840:{
            items:3
        },
    }
    });
    
    $('.owl-carousel-rvd-card-mini').owlCarousel({
    loop:true,
    margin: 10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
         340:{
            items:2
        },
       488:{
            items:3
        },
       840:{
            items: 4
        }
    }
});

 $('.owl-destaq-ofertas').owlCarousel({
    loop:true,
    margin:15,
    nav:false,
    responsive:{
        0:{
            items:3
        },
           580:{
            items:4
        },
         740:{
            items:5
        },
        990:{
            items:6
        },
    }
    });
</script>
    


</body>

</html>
