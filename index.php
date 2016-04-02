<?php 
	$base_url = 'http://' .$_SERVER['HTTP_HOST'];
	include 'header.php';
?>
			<div id="topWrap" class="jumbotron">
			<div class="container">
				<div class="col-md-6 col-md-push-6 jumboText">
					<h1>Somos los constructores de la web</h1>
					<h2>Diseñamos tu página como lo desees.</h2>
					<a class="btn btn-lg btn-success actionBtn" href="#store">	<span class="fa fa-mobile fa-4x pull-left"></span>
						<span class="line1">Available on the</span>
						<div></div>
						<span class="line2">App Store</span>
						<div></div>
						<span class="line1" itemprop="author" itemscope itemtype="https://schema.org/Person">
						Albañiles.com.ar
						</span>
					</a>
					<div itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
					    <meta itemprop="url" content="http://www.albañiles.com.ar/assets/img/tablet.png">
					    <meta itemprop="width" content="800">
					    <meta itemprop="height" content="800">
					</div>
				</div>
				
				<div class="col-md-6 col-md-pull-6 hidden-xs">
					<div class="mobile">
						<div class="mobileSlider">
							<ul class="slides">
								<li>
									<img src="
									http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/img/screen1.png" alt="Pantalla celular" />
								</li>
								<li>
									<img src="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/img/screen2.png" alt="Pantalla celular nueva"/>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			</div>

	<div id="featureWrap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 text-center feature">
					<span class="fa fa-tablet icon"></span>
					<h3>Marketing Online</h3>
					<p>
						Te damos reputación online, te posicionamos entre los mejores
						buscadores y a través de redes sociales.
					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<span class="fa fa-pencil icon"></span>
					<h3>Desarrollo web</h3>
					<p>
						Desarrollamos su página a pedido con base de datos, sistema de pago.
					</p>
				</div>
				<div class="col-sm-4 text-center feature">
					<span class="fa fa-star icon"></span>
					<h3>Diseño Gráfico</h3>
					<p>
						
					</p>
				</div>
			</div>
		</div>
	</div> <!-- /featureWrap -->
	
	<div id="productWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">¿Cómo empezar?</h2>
					<h3 class="sectionTitle">
						Te damos las instrucciones para dar los primeros pasos
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<div class="imgWrap">
						<img class="img-responsive" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/assets/img/tablet.png" alt="Pantalla de una tablet"/>
						<iframe class="iframe-youtube" title="albaniles youtube" frameborder="0" src="https://www.youtube.com/embed/CPmKxmvsL8Q?autoplay=1&amp;controls=0&amp;loop=1&amp;playlist=CPmKxmvsL8Q&amp;rel=0&amp;showinfo=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-5">
					<div class="productFeatures clearfix">
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<span class="fa fa-circle fa-stack-2x"></span>
							<span class="fa fa-comments fa-stack-1x fa-inverse"></span>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>
								Solícita tu página
							</h3>
							<p>
								Contactanos para acordar el diseño y las características deseadas. Nosotros nos encargamos del resto-
							</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<span class="fa fa-circle fa-stack-2x"></span>
							<span class="fa fa-cogs fa-stack-1x fa-inverse"></span>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>Nosotros la diseñamos</h3>
							<p>
								Comenzamos la construcción de tu sitio con el diseño acordado.
							</p>
						</div>
						<div class="col-xs-2 icon">
							<span class="fa-stack fa-lg">
							<span class="fa fa-circle fa-stack-2x"></span>
							<span class="fa fa-globe fa-stack-1x fa-inverse"></span>
							</span>
						</div>
						<div class="col-xs-10">
							<h3>Te damos la mejor posición</h3>
							<p>Posicionamos tu página para que esté entre las mejores en los buscadores.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /productWrap -->
<!--	
	<div id="pricingWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">Ready to get started?</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<ul class="priceTable">
						<li class="title">Basic Plan</li>
						<li class="description">For basic people</li>
						<li class="price">$9.99</li>
						<ul class="features">
							<li>Phasellizzle brizzle</li>
							<li>Crizzle aliquizzle</li>
							<li>And a lot more gizzle</li>
						</ul>
						<li class="call">
							<a class="btn btn-success btn-lg" href="#buy">Buy Now0</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="priceTable alt">
						<li class="title">Super Plan</li>
						<li class="description">For super people</li>
						<li class="price">$19.99</li>
						<ul class="features">
							<li>Phasellizzle brizzle</li>
							<li>Crizzle aliquizzle</li>
							<li>And a lot more gizzle</li>
						</ul>
						<li class="call">
							<a class="btn btn-success btn-lg" href="#buy_now">Buy Now1</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-4">
					<ul class="priceTable">
						<li class="title">Awesome Plan</li>
						<li class="description">For awesome people</li>
						<li class="price">$29.99</li>
						<ul class="features">
							<li>Phasellizzle brizzle</li>
							<li>Crizzle aliquizzle</li>
							<li>And a lot more gizzle</li>
						</ul>
						<li class="call">
							<a class="btn btn-success btn-lg" href="#buy_now_1">Buy Now2</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
-->	
<!--
	<div id="testimonialsWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">What people say</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="quote">"Etizzle laoreet doggy dope nisl. Dang pulvinizzle, ipsizzle dawg."</div>
								<div class="author">Martin Nizzle</div>
							</li>
							<li>
								<div class="quote">"Crazy tellus urna, yo mamma check out this, eleifend you son of a bizzle."</div>
								<div class="author">Jennifer Aliquizzle</div>
							</li>
							<li>
								<div class="quote">"Praesent i saw beyonces tizzles and my pizzle went crizzle turpizzle."</div>
								<div class="author">William Lorizzle</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
-->
	
	<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Contactanos</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						Dejanos un mensaje sobre qué queres diseñar y nos mantenemos en contacto.
						</div>
					</div>
				</div>
				<form action="send.php" method="post">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-2">
						<div class="inputContainer">
						<label for="contactName">Nombre</label>
							<input type="text" name="contactName" id="contactName" value="" class="form-control" autocomplete="off" />
						</div>
					</div>
					<div class="col-sm-4">
						<div class="inputContainer">
						<label for="email" class="screen-reader-text">Mail</label>
							<input type="text" name="email" id="email" value="" class="form-control" autocomplete="off"  />
						</div>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
						<div class="inputContainer">
						<label for="commentsText" class="screen-reader-text">Mensaje</label>
							<textarea name="comments" id="commentsText" class="form-control" autocomplete="off"></textarea>
						</div>
					</div>
					<div class="col-sm-8 col-sm-offset-2">
						<input type="submit" class="btn btn-primary btn-lg" value="Enviar">
					</div>
				</div>
				</form>
			</div>
		</div>
	</div> <!-- /contactWrap -->
<?php
	include 'footer.php';
?>