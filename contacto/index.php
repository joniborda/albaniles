<?php 
	$base_url = 'http://' .$_SERVER['HTTP_HOST'];
	include '../header.php';
?>
	<div id="contactWrap" class="top">
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
	include '../footer.php';
?>