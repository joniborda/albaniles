<?php 
	$base_url = 'http://' .$_SERVER['HTTP_HOST'];
	include '../header.php';
?>
<div id="productWrap" class="altWrap top">
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
<?php
	include '../footer.php';
?>