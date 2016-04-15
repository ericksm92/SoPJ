<?php
require('inc/globals.php'); // Require in all pages gitttt
?>

	<?php include 'inc/init.php'; ?>
	<link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/nivo-slider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo url_path() ?>style/theme-nivo.css">
	<link href="<?php echo url_path() ?>style/slick.css" rel="stylesheet">
</head>	
<body>
<div id="page">			
	<?php include 'inc/header.php'; ?>

	<div class="teaser hidden-xs col-lg-12 col-md-12 col-sm-12 paddingnone">
		<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
            	<a href="<?php echo url_path() ?>" title="titulo do teaser">
            		<img alt="titulo do teaser" src="<?php echo url_path() ?>images/home/banner01.jpg">
            	</a>
            	<a href="<?php echo url_path() ?>" title="titulo do teaser">
            		<img alt="titulo do teaser" src="<?php echo url_path() ?>images/home/banner02.jpg">
            	</a>
            </div>
        </div>
	</div><!-- Fecha teaser Desktop teste git hub-->

	<div class="">
		<div class="tm_full">
			<div class="tm_cont container">		
				<div class="col-lg-7 col-md-7 row col-sm-12 tm_box">
					<div class="col-lg-5 col-sm-5 paddingnone">
						<img src="<?php echo url_path() ?>images/home/home_img_01.jpg"/>
					</div>
					<div class="col-lg-7 col-sm-7">
						<div class="tm_titulo">
							<p>TELEFONIA MÓVEL teste 2</p>
						</div>
						<div class="tm_text">
							<p>Para sua empresa o serviço de telefonia é ideal para fechar negócios, transmitir dados e manter a equipe conectada.</p>
							<p><strong>Escolha ao lado qual empresa gostaria de conhecer e solicite uma proposta</strong></p>
						</div>
					</div>
				</div>

				<div class="col-lg-5 col-md-5 col-sm-8">
					<div class="col-lg-12 row tm_linha_icons paddingnone">
						<div class="tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
						<div class="tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
						<div class="tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
					</div>	
					<div class="col-lg-12 row paddingnone">
						
						<div class=" tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
						<div class="tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
						<div class="tm_icon_box">
							<img src="<?php echo url_path() ?>style/images/icon_claro.png"/>
						</div>
					</div>			
				</div>
			</div>
		</div>

		<div class="novi_full">
			<div class="container">
				<div class="nov_titulo">
					<p>NOVIDADES</p>
				</div>

				<div class="container">

		            <div class="novidades">

					   <div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
							<div class="slide__caption">Any HTML here</div>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>

					</div>

				</div>

			</div>
		</div>

		<div class="container">
			<div class="dep_cont col-lg-12 col-md-12 col-sm-12">
				<div class="col-lg-10 dep_align">
					<p class="dep_txt">Lorem ipsum dolor sit amet, <strong>Telecom</strong>. Suspendisse rutrum lobortis nulla. Quisque nibh tellus, volutpat in, condimentum vel, eleifend eget, elit. Donec est enim, congue eget, pharetra vulputate, euismod a, lacus. Sed accumsan, libero in hendrerit molestie, neque arcu interdum augue, ut viverra dui ligula quis velit.</p>
					<p class="dep_autor">Fulano de Tal - Diretor de novos Negócios - SP</p>
				</div>
				<div class="dep_btn"><p><a href="#">Conhecer &gt;</a></p></div>
			</div>
		</div>

		<div class="serv_full">
			<div class="container">
				<div class="serv_cont col-lg-12">
					<div class="serv_titulo">
						<p>SERVIÇOS ESSENCIAIS PARA SEU NEGÓCIO</p>
					</div>
					<div class="col-lg-6 col-md-5">
						<img src="<?php echo url_path() ?>images/home/serv_cont.jpg">
					</div>
					<div class="col-lg-6 col-md-7 row">
						<div class="serv_txt col-md-12">
							<p>Separamos alguns serviços que são escenciais para o pleno funcionamento de sua empresa. Conheça alguns deles na lista abaixo:</p>
						</div>
						<div class="col-md-12">
							<div class="col-lg-4 col-md-4">
								<div class="serv_txt_titulo">
									<p>TELECOM</p>
									<ul>
										<li><a href="#">Telefonia Móvel</a></li>
										<li><a href="#">Banda Larga</a></li>
									</ul>
								</div>

								<div class="serv_txt_titulo">
									<p>SUPRIMENTOS</p>
									<ul>
										<li><a href="#">Máquina de café</a></li>
										<li><a href="#">Filtro de água</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-4 col-md-4">
								<div class="serv_txt_titulo">
									<p>SEGURANÇA</p>
									<ul>
										<li><a href="#">Monitoramento</a></li>
									</ul>
								</div>

								<div class="serv_txt_titulo">
									<p>SAÚDE</p>
									<ul>
										<li><a href="#">Plano de Saúde</a></li>
										<li><a href="#">Plano de Convenio</a></li>
									</ul>
								</div>
							</div>

							<div class="col-lg-4 col-md-4">
								<div class="serv_txt_titulo">
									<p>MÍDIAS ONLINE</p>
									<ul>
										<li><a href="#">Produção de mídia</a></li>
										<li><a href="#">Disparo de e-mail</a></li>									
										<li><a href="#">Adwords</a></li>
										<li><a href="#">SEO</a></li>
										<li><a href="#">Geração de Leads</a></li>
									</ul>
								</div>
								
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-12">
					<div class="servicos">		            
					   <div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
						<div class="novi_box">
							<img src="<?php echo url_path() ?>images/home/novidade01.jpg"/>
						</div>
					</div>
				</div>

			</div>
		</div>
		<?php include 'inc/footer.php'; ?>
	</div>    
<script type="text/javascript" src="<?php echo url_path() ?>js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>

<script type="text/javascript" src="<?php echo url_path() ?>js/slick.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

    	$('.novidades').slick({
			  dots: false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 4,
			  responsive: [
			    {
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});

    	$('.servicos').slick({
			  dots: false,
			  infinite: true,
			  speed: 300,
			  slidesToShow: 4,
			  slidesToScroll: 4,
			  responsive: [
			    {
			      breakpoint: 991,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3,
			        infinite: true,
			        dots: true
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			    // You can unslick at a given breakpoint now by adding:
			    // settings: "unslick"
			    // instead of a settings object
			  ]
			});

        $('.noticias').slick({
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
		    {
		      breakpoint: 991,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 441,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

		$('.loja').slick({
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1
		});
    });

    function validaEmail (input){ 
	    if (input.value != document.getElementById('newsEmail').value) {
	    	input.setCustomValidity('Os e-mails não conferem');
	  	} else {
	    	input.setCustomValidity('');
	  	}
	} 
</script>
</body> 
</html>
