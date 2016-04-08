<?php 
	$base_url = 'http://' .$_SERVER['HTTP_HOST'];
	include '../header.php';
?>
			<div id="topPorfolio">
			<div class="container">
				<h2 class="sectionTitle">Nuestros clientes</h2>
				<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12 porfolio_box">
					<a href="#">
						<img src="<?php echo $base_url; ?>/assets/img/porfolio_pileta.png" class="porfolio_img" />
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 porfolio_box">
					<a href="#">
						<img src="<?php echo $base_url; ?>/assets/img/porfolio_pileta.png" class="porfolio_img" />
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12 porfolio_box">
					<a href="#">
						<img src="<?php echo $base_url; ?>/assets/img/porfolio_pileta.png" class="porfolio_img" />
					</a>
				</div>
				</div>
				<div class="porfolio_bottom">
					<a href="#contactWrap" class="btn btn-primary">
						Comenzar Ahora <span class="fa fa-angle-right"></span>
					</a>
				</div>
			</div>
			</div>
	<div id="contactWrap">
		<div class="overlay">
			<div class="container">
				<div class="row">
						<div class="col-xs-12">
						<h2 class="sectionTitle">Comenzar ahora</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<div class="blurb">
						Envíanos tus datos y nosotros comenzaremos el diseño.
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
	include '../footer.php';
?>