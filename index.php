<!DOCTYPE html>
<html lang="es">
<head>
<title>:: JURICOMEX | Gestión Eficiente ::</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" /> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
<!--// online-fonts -->

</head>
<body>

	<style>
		
		.img-responsive1 {

			width:  475px;
			height: 356px;

		}

		.img-thumbnail{

			width:  1258px;
			height: 542px;

		}


		.popular-w3 {

			margin-top: 5em;

		}	

	</style>

<!-- header -->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html"><i><img src="images/logo2.png" alt="" /></i>JURICOMEX</a></h1>
			</div>
			
			<div class="header-left">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>
											
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

						
						<nav class="link-effect-9" id="link-effect-9">
							<ul class="nav navbar-nav">
								<li class="active"><a class="hvr-overline-from-center scroll" href="index.html">Inicio</a></li>
								<li><a href="#about" class="hvr-overline-from-center scroll">Nosotros</a></li>
								<li><a href="#team" class="hvr-overline-from-center scroll">Fundadora</a></li>
								<li><a href="#blogs" class="hvr-overline-from-center scroll">Inmuebles</a></li>
								<li><a href="#properties" class="hvr-overline-from-center scroll">Galería</a></li>
								<li><a href="#contact" class="hvr-overline-from-center scroll">Contáctanos</a></li>


						  <?php
           					session_start();
    							if (isset($_SESSION['id'])) {?>
               						
								 <li><a class="btn btn-outline-primary" href="login.php"><?=$_SESSION['name']?></a></li>
						  <?php			 	
						        } else{?>

								 <li><a class="btn btn-outline-primary" href="login.php">Administrar</a></li>
						  <?php	

						        }

						  ?>

								
							</ul>
						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner-text -->
			<div class="banner-text"> 
				<div class="container">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-w3lstext">
									<h3>Asesoría y consultoría profesional independiente.</h3>
									
								</div>
							</li>
							<li>
								<div class="banner-w3lstext">
									<h3>Gestión de cobranza.</h3>
									
								</div>
							</li>
							<li>
								<div class="banner-w3lstext">
									<h3>Gestión de calidad empresarial y emprendimiento.</h3>
									
								</div>
							</li>
							<li>
								<div class="banner-w3lstext">
									<h3>Administración de inmuebles.</h3>
									
								</div>
							</li>
							<li>
								<div class="banner-w3lstext">
									<h3>Corretaje para venta de inmuebles.</h3>
									
								</div>
							</li>
						</ul> 
					</div> 	
				</div>
			</div>
			<!-- //banner-text -->
		<!-- //banner --> 
		
<!--grids --> 
		<div class="popular-w3">
				<div class="popular-grids">
					<div class="col-md-3 popular-grid">
						<img src="images/a.jpg" class="img-responsive1" alt=""/>
						<div class="popular-text">
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Administración de inmuebles y corretaje</h5>
							<div class="detail-bottom">
								<p>Administración para ocupación de inmuebles destinados a arrendamiento de vivienda urbana y local comercial. Y la gestión de venta de inmuebles a través de corretaje.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/c.jpg" class="img-responsive1" alt=""/>
						<div class="popular-text">
							<i class="fa fa-envira" aria-hidden="true"></i>
							<h5>Asesoría y consultoría profesional independiente</h5>
							<div class="detail-bottom">
								<p>Servicio integral dirigido a diferentes áreas de una empresa: aspectos laborales, comerciales, financieras, contables y en especial, asesoramiento jurídico integral de calidad.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/d2.jpg" class="img-responsive1" alt=""/>
						<div class="popular-text">
							<i class="fa fa-building" aria-hidden="true"></i>
							<h5>Gestión de <br>cobranza</h5>
							<div class="detail-bottom">
								<p>Servicio enfocado en la recuperación de dineros de nuestros clientes, ya sean, personas jurídicas o naturales. Cobros <b>pre-jurídicos y jurídicos.</b> Acuerdos de pago.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 popular-grid">
						<img src="images/b.jpg" class="img-responsive1" alt=""/>
						<div class="popular-text">
							<i class="fa fa-cog" aria-hidden="true"></i>
							<h5>Gestión de calidad empresarial y emprendimiento</h5>
							<div class="detail-bottom">
								<p>Capacitación en las diferentes áreas del saber empresarial por medio de cursos o conferencias.<br><br></p>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
<!-- //grids --> 
<!-- about us --> 
<div class="about-w3layouts" id="about">
	<div class="container">	

							
						
		<h5 class="title-w3">Acerca de Nosotros</h5>
		<div class="col-md-6 left-agile">
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Quienes somos</li>
						<li>Misión</li>
						<li>Visión</li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab1">
						<i class="fa fa-cog i1" aria-hidden="true"></i>
						<p class="subp-w3l in1"><li><b>JURICOMEX</b> es una empresa joven y dinámica, con sede principal en la ciudad de Cartagena.</li><br>
                            <li>Enfocada en el sector de la prestación de servicios de <b>asesoría y consultoría jurídica</b> en todas las ramas del derecho, y en otros campos como la administración, contaduría, finanzas, entre otras.</li><br>
                            <li>Busca ser una alternativa de <b>prevención</b> de conflictos en las empresas pequeñas y medianas locales, que no cuentan con un abogado o analista jurídico en su planta de trabajo.</li><br>
                            <li>Además también busca ser una alternativa de asesoría empresarial para la promoción y orientación en el <b>emprendimiento.</b></li>
                            <br>
                            <li>La idea principal es trabajar de la mano pero independientemente de nuestros contratistas, para formar un <b>engranaje</b> de actividades en pos de crecimiento.</p></li>
						</div>
						
						<div class="tab2">
							<i class="fa fa-cog i1" aria-hidden="true"></i>
							<p class="subp-w3l in1">La empresa se proyecta a posicionarse como la asesoría e intermediaria número uno en la ciudad de Cartagena, generando confianza en las entidades contratantes y promoviendo una cultura de prevención del riesgo en el desarrollo de actividades comerciales, jurídicas o cualquier emprendimiento.</p>
						</div>

						<div class="tab3">
							<i class="fa fa-cog i1" aria-hidden="true"></i>
							<h4 class="sub-w3l">Visión</h4>
							<p class="subp-w3l">La provisión de una alternativa de asesoramiento y consultoría en una imagen corporativa y ordenada, rendimiento para consecución de resultados en pos de nuestros contratantes.</p>

							<h4 class="sub-w3l">Objetivos</h4>
							<p class="subp-w3l">Pensado para ofrecer seguridad a las empresas de pequeñas y medianas en sus recursos o activos, para la ejecución y explotación continua de su objeto social, ofreciendo técnicas para el crecimiento de mano con el emprendimiento.</p>
						</div>
					</div>
			</div>
		</div>
		<div class="col-md-6 agileits_updates_grid_right">
					<h3>En que consisten Nuestros <span>Servicios</span></h3>
					<ul id="flexiselDemo1">			
						<li>
							<img src="images/ab1.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="images/ab2.jpg" alt=" " class="img-responsive" />
						</li>
						<li>
							<img src="images/ab3.jpg" alt=" " class="img-responsive" />
						</li>
					</ul>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title asd">
							<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>ASESORÍA Y CONSULTORÍA PROFESIONAL INDEPENDIENTE 
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body panel_text">
							<li>Nuestros servicios de asesoría o consultoría sugiere a nuestras empresas clientes que hacer y cómo hacerlo; y además, existe una línea en la que  aparte de lo anterior,  ayuda a una empresa a hacerlo, es decir, a una ejecución conjunta o contratada.</li>
                            <li>La asesoría o consultoría  está enfocada en diferentes aspectos, empezando por un fuerte conocimiento jurídico, como también, comercial, financiero, de contaduría y no menos importante de emprendimiento.</li>
                            <li>Organización o estructuración laboral, de acuerdo con las normas de esta naturaleza; revisión de contrataciones laborales, y en general toda asesoría de derecho laboral.</li>
                            <li>Asesoría o consultoría en temas de contrataciones comerciales o civiles, así como también la implementación de un eficaz manejo de garantías como títulos valores.</li> 
                            <li>Entre otros servicios relacionados.</li>

						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
						  <h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>GESTIÓN DE COBRANZA
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
						   <div class="panel-body panel_text">
							<li>Está dirigido a personas <b>naturales y jurídicas</b>, dedicadas a la realización de negocios de préstamos al interés.
							</li>
                            <li>También dirigido a personas naturales o jurídicas que por su actividad económica o comercial generen acreencias, tales como proveedores de bienes y servicios, etc.</li>
                            <li>El servicio abarca tanto gestiones de cobro <b>pre-jurídico como jurídico</b>, informando a los clientes el estado en que se encuentra cada caso y las novedades del mismo, dando continuidad en las gestiones correspondientes con un trabajo serio y minucioso.
                            </li>
                            <li><b>Cobro pre-jurídico:</b> Cuento con el apoyo especializado para la recuperación de cartera, iniciando con un cobro amigable con los deudores, estudiando y dando un seguimiento personalizado y exhaustivo en cada caso.</li>
                            <li><b>Cobro Jurídico:</b> Un vez agotadas las posibilidades de un cobro pre-jurídico, concentrado en los mecanismos de viabilidad de éxito y con previa autorización del cliente (empresa), se da inicio a las <b>acciones judiciales pertinentes</b></li>

						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
						  <h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>GESTIÓN DE CALIDAD EMPRESARIAL Y EMPRENDIMIENTO
							</a>
						  </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						   <div class="panel-body panel_text">
							<li>Asesoramiento en la creación de empresa, organización corporativa y comercial.</li>
                            <li>Esta línea de servicios va de la mano con el asesoramiento o consultoría jurídico en temas comerciales, civiles y de derecho laboral.</li>
                            <li>Nuestro método de desarrollo es la capacitación en diferentes temáticas del sector empresarial que contribuya al emprendimiento dinámico.</li>
                            <li>Así mismo, ofrecemos amplio manejo de temas contables, financieros, tributarios, fiscales y demás concernientes al desarrollo y crecimiento de una pequeña o mediana empresa.</li>

						  </div>
						</div>
					  </div>
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
						  <h4 class="panel-title asd">
							<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>ADMINISTRACIÓN DE INMUEBLES Y CORRETAJE
							</a>
						  </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						   <div class="panel-body panel_text">
							<li>Esta línea de servicio es nuestra mayor fortaleza ya que la hemos trabajado incluso antes de ser una empresa, consiste en recibir un inmueble en administración, a través de un contrato de esa naturaleza, y a partir de el, ponerlo a disposición del público ya sea para arrendamiento o bien, para venta, en este caso, actuamos como corredores.</li>
                            <li>La administración comprende el ofrecimiento al público, el estudio o escogencia de inquilinos, elaboración de contratos de arrendamiento, cobro de cánones mes a mes, y en caso de incumplimiento, garantía de recuperación de saldos.</li>
                            <li>La venta se hace a través de corretaje ofreciendo al público la disponibilidad del inmueble, creando canales de negocio concretos.</li>

						  </div>
						</div>
					  </div>
					</div>
		</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //about us --> 
<!--team start here-->
<div class="team  wthree" id="team">
	<div class="container">
		<div class="team-main">
			<div class="team-top">
				<h3>Fundadora</h3>
			</div>
			<div class="team-bottom">
				<div class="col-md-4 team-grid">
					
					</div>
					<div class="caption">
						
					</div>
				</div>
				<div class="col-md-4 team-grid">
					<img src="images/t2.jpg" alt="" >
					<div class="team-text">
						<h4>Angélica Soleno Arias</h4>
						<h5>GERENTE</h5>
					</div>
					<div class="caption">
						<ul>
							<li><a href="#"><i class="fa fa-facebook f1" aria-hidden="true"></i></a></li>
							<li><a href="#" ><i class="fa fa-twitter f2" aria-hidden="true"></i></a></li>
							<li><a href="#" ><i class="fa fa-instagram f3" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 team-grid">
					
					<div class="team-text">
						
					</div>
					<div class="caption">
						
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //team -->
<br><br><br><br>
<div class="alert alert-info" role="alert">
 <center><h4>Envianos tus anuncios y los publicaremos aquí y en nuestras redes sociales.</h4></center>
</div>

<!-- propiedades -->
<div class="blog-agile" id="blogs">
	<h3>Inmuebles Disponibles</h3>
	<div class="container">
		<div class="main-w3l">
			<div class="">
				
			</div>
			<div class="sub2-w3l">
				<h4>APARTAMENTO 1: PARA ARRIENDO</h4>
				<p>Arriendo apartamento en conjunto recidencial "Torres de victoria" (barrio San Fernando al lado de portales de San Fernando).</p>
				<a href="#" data-toggle="modal" data-target="#myModal1">Agendar cita<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
		</div>
		<div class="main2-w3l">
			<div class="">
				
			</div>
			<div class="sub2-w3l b2">
				<h4>APARTAMENTO 2: PARA ARRIENDO</h4>
				<p>Arriendo apartamento Edificio Las Palmas <br> (Barrio Anita) 3 PISO.</p>
				<a href="#" data-toggle="modal" data-target="#myModal2">Agendar cita<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>



			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="main-w3l">
			
			<div class="sub2-w3l b2">
				<h4>APARTAMENTO 3: PARA ARRIENDO</h4>
				<p>Arriendo apartamento en conjunto alameda el jardin - ciudad jardin (barrio La Carolina antes de la terminal de transportes).</p>
				<a href="#" data-toggle="modal" data-target="#myModal3">Agendar cita<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
		</div>
		<div class="main2-w3l">
			
			<div class="sub2-w3l">
				<h4>APTO 4: PARA ARRIENDO</h4>
				<p>Arriendo aparta - estudio en <br> (barrio Blas de Lezo) .</p>
				<a href="#" data-toggle="modal" data-target="#myModal4">Agendar cita<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- Modal1 -->
						<div class="modal fade" id="myModal1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>APARTAMENTO PARA ARRIENDO</h4>
											<h5>DESCRIPCIÓN:</h5>
											
											<span>Hermoso apartamento ubicado en el barrio San Fernando, Cra. 80. Consta de 2 habitaciones con closets, un baño, sala - comedor con balcón (vista al interior del conjunto), cocina integral y zona de labores.Cuenta con áreas comunes como piscina de adultos y niños, zona de parqueaderos comunales, salón social, canchas deportivas, juegos infantiles, vigilancia 24 horas, recepción de correspondencia.<br>
										<lu>	
										    <li>Costo: $9850.000 Negociables (incluye administración- sin servicios)</li>
										    <li>Contacto: Escribir o llamar al celular 3157780849</li>
										    <li>Email: <a href="mailto:comexjuris@gmail.com">comexjuris@gmail.com</a></li>
										</lu>
										</span>
										<a class="btn btn-primary btn-lg btn-block" href="cita.php" role="button">Agendar cita</a>
									</div>
								</div>
						
							</div>
				       </div> 

				       <div class="modal fade" id="myModal2" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>APARTAMENTO PARA ARRIENDO</h4>
											<h5>DESCRIPCIÓN:</h5>
											
											<span>Consta de tres habitaciones (dos con closet y una pequeña), un baño, sala-comedor, cocina, zona de labores. Tercer piso.<br>
										  <li>Precio: $700.000 (negociables) sin servicios. (Incluye administración)</li>
									      <li>Contacto: Escribir o llamar al celular 3157780849</li>
										  <li>Email: <a href="mailto:comexjuris@gmail.com">comexjuris@gmail.com</a></li>
										</span>
										<a class="btn btn-primary btn-lg btn-block" href="cita.php" role="button">Agendar cita</a>
									</div>
								</div>
						
							</div>
				       </div>


				       <div class="modal fade" id="myModal3" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>APARTAMENTO PARA ARRIENDO</h4>
											<h5>DESCRIPCIÓN:</h5>
											
											<span>Consta de dos habitaciones con closets + estudio, sala comedor, cocina, zona de labores y baño. Ubicado en la torre 4, piso 6. ASCENSORCuenta con áreas comunes como piscina de adultos y niños, zona de parqueaderos comunales, salón social, canchas deportivas, juegos infantiles, vigilancia 24 horas, recepción de correspondencia.<br>
											<li>Precio: 650.000 pesos incluyendo administración – SIN SERVICIOS</li>
											<li>Contacto: Escribir o llamar al celular 3157780849</li>
											<li>Email: <a href="mailto:comexjuris@gmail.com">comexjuris@gmail.com</a></li>
										</span>
										<a class="btn btn-primary btn-lg btn-block" href="cita.php" role="button">Agendar cita</a>
									</div>
								</div>
						
							</div>
				       </div>


				       <div class="modal fade" id="myModal4" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>APARTAMENTO PARA ARRIENDO</h4>
											<h5>DESCRIPCIÓN:</h5>
											
											<span>Consta de: Una habitación con closet, un baño, sala comedor, cocina y patio con zona de labores. Primer piso. <br>
											<li>Precio: $550 sin servicios.</li>
											<li>Mas información: Escribir o llamar al 3155568839</li>
											<li>Email: <a href="mailto:comexjuris@gmail.com">comexjuris@gmail.com</a></li>
										</span>
										<a class="btn btn-primary btn-lg btn-block" href="cita.php" role="button">Agendar cita</a>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->

             <!-- //propiedades -->



<!-- Gallery 
	<div class="gallery" id="properties">

		<h3>Galería</h3>

		<div class="gallery-items">
			<div class="gallery-item gallery-item-1">
				<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g1.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-2">
				<a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g2.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-3">
				<a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g3.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-4">
				<a class="example-image-link" href="images/g4.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g4.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-5">
				<a class="example-image-link" href="images/g5.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g5.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-6">
				<a class="example-image-link" href="images/g6.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g6.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-7">
				<a class="example-image-link" href="images/g7.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g7.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-8">
				<a class="example-image-link" href="images/g8.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g8.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-9">
				<a class="example-image-link" href="images/g9.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g9.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="gallery-item gallery-item-10">
				<a class="example-image-link" href="images/g10.jpg" data-lightbox="example-set" data-title="">
					<div class="grid">
						<figure class="effect-apollo">
							<img src="images/g10.jpg" alt="Asset"/>
								<figcaption></figcaption>
						</figure>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
		</div>

	</div>
	 //Gallery -->

    <!-- contact --><div class="contact" id="contact">
	<div class="contact-top">
		<h3>Contáctanos</h3>
	</div>
	<div class="container">
		<div class="contact-main w3agile">
			<div class="col-md-7 contact-left">
			  <div class="contact-bottom">
			  	<form action="#" method="post">
			  		<input type="text" placeholder="Nombre" name="Name" required="">
			  		<input type="email" class="no-mar" placeholder="Email" name="Email">
			  		<textarea placeholder="Mensaje" name="Message"></textarea>
			  		<input type="submit" value="Enviar">
			  	</form>
			  </div>
			 </div>
			 <div class="col-md-5 map">
			 	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.016606323542!2d-75.5496622858308!3d10.42025546851758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef62f75d0000001%3A0x94a3dcf8e2d2e331!2sCentro+Comercial+Getsemani!5e0!3m2!1ses!2sco!4v1531180917889" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			 </div>
		   <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--find-->
<div class="footer agileinfo">
	<div class="container">
		<div class="footre-main">
			   <div class="footer-top">
			   	<h3>Encuentranos</h3>
			   </div>
			   <div class="footer-bottom">
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f1.png" alt=""></span>
			   	 	 <div class="ftr-text">
				   		<h4>Teléfonos</h4>
				   		<p>Fijo: 6510343</p>
				   		<p>Cell: +57 315556839</p>
			   	     </div>
			   	     <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f3.png" alt=""></span>
			   	 	<div class="ftr-text">
			   		  <h4>Dirección de la Oficina</h4>
			   		  <p>Centro Comercial Getsemaní</p>
                       <p>Local: 1B 123 Cartagena/Bolivar</p>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="col-md-4 ftr-grid">
			   	 	<span class="ftr-address-icons"><img src="images/f2.png" alt=""></span>
			   	 	<div class="ftr-text">
			   		  <h4>E-mail</h4>
			   		  <p><a href="mailto:comexjuris@gmail.com">comexjuris@gmail.com</a></p>
			   		</div>
			   		 <div class="clearfix"> </div>
			   	 </div>
			   	 <div class="clearfix"> </div>
		     </div>			
		</div>
	</div>
</div><!-- //find -->

<!-- footer -->
<div class="footer-agile">
	<div class="container">
		<div class="col-md-5 footer-main1">
			<h2>JURICOMEX</h2>
		</div>
		<div class="col-md-7 footer-main2">
			<h4>Gestión jurídica y comercial eficiente!</h4>
			<p>Nos place presentar a ustedes nuestro portafolio de servicios enfocado en identificar nuestras diferentes líneas o paquetes de servicios, para la atención de necesidades de prevención y/o acción que su empresa requiera.</p>
			<ul>
				<li><a href="#home" class="scroll">Inicio</a></li>
				<li><a href="#about" class="scroll">Nosotros</a></li>
				<li><a href="#team" class="scroll">Fundadora</a></li>
				<li><a href="#blogs" class="scroll">Propiedades</a></li>
				<li><a href="#properties" class="scroll">galería</a></li>
				<li><a href="#contact" class="scroll">Contáctanos</a></li>
				<li><a href="login.php" >Administrar</a></li>
			</ul>
		</div>
		 <div class="clearfix"> </div>
		<div class="copyright-agile">
			<p>&copy; 2020 JURICOMEX S.A.S. Todos los derechos reservados. 
			<a href="https://www.facebook.com/JURIComex/"><i class="fa fa-facebook f1" aria-hidden="true"></i></a>
			<a href="https://twitter.com/comexjuris" ><i class="fa fa-twitter f2" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/comexjuris/?hl=es-la" ><i class="fa fa-instagram f3" aria-hidden="true"></i></a>
			</p>		

          

		</div>
	</div>
</div>
<!-- //footer -->

<!-- js-scripts -->
		
			<!-- js -->
				<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
				<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
			<!-- //js -->
			
			
			<!-- FlexSlider --> 
						<script defer src="js/jquery.flexslider.js"></script>
						<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
			<!-- End-slider-script -->
			
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start-smoth-scrolling -->
			
<!--responsive tabs -->

							 <script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});

});
</script>
<!-- // responsive tabs -->
 
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:3,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					
					
 <!-- Popup-Box-JavaScript -->
		<script src="js/modernizr.custom.97074.js"></script>
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.gallery-item a').Chocolat();
			});
		</script>
		<!-- //Popup-Box-JavaScript -->
	<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
		<script type="text/javascript">
			$(document).ready(function() {
				var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 100,
					easingType: 'linear'
				};
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
<!-- //smooth scrolling -->

	<!-- //js-scripts -->
</body>
</html>