<?php require_once('blocks/slider-inner.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="sideBar">
				<div class="headingSide descargas">
					<h2><i class="icon-musica"></i> Lo más descargado</h2>
				</div>
				<div class="filters">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Top descargas <i class="fa fa-angle-down" aria-hidden="true"></i>
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<ul>
										<li><a href="#">Top en descargas</a></li>
										<li><a href="#">Música</a></li>
										<li><a href="#">Juegos</a></li>
										<li><a href="#">Apps</a></li>
										<li><a href="#">Imágenes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Content Start -->
		<div class="col-md-8 content">
			<h2>Top en Descargas</h2>
			<table class="table table-striped">
				<tbody> 
					<tr> 
						<th><a onclick="this.firstChild.play()"><audio src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Hymne_delphique.ogg"></audio><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i></a></th> 
						<th><b>La Bicicleta</b></th> 
						<th>Carlos Vives ft. Shakira</th> 
						<th class="downLoad"><a href="#"><i class="fa fa-download fa-2x" aria-hidden="true"></a></i></th>
					</tr> 
					<tr> 
						<th scope="row"><a onclick="this.firstChild.play()"><audio src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Hymne_delphique.ogg"></audio><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i></a></th>
						<th><b>La Bicicleta</b></th> 
						<th>Carlos Vives ft. Shakira</th> 
						<th class="downLoad"><a href="#"><i class="fa fa-download fa-2x" aria-hidden="true"></a></i></th> 
					</tr> 
					<tr> 
						<th scope="row"><a onclick="this.firstChild.play()"><audio src="https://upload.wikimedia.org/wikipedia/commons/0/0d/Hymne_delphique.ogg"></audio><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i></a></th>
						<th><b>La Bicicleta</b></th> 
						<th>Carlos Vives ft. Shakira</th> 
						<th class="downLoad"><a href="#"><i class="fa fa-download fa-2x" aria-hidden="true"></a></i></th> 
					</tr> 
				</tbody> 
			</table>
			<table class="table table-striped">
				<tbody> 
					<tr> 
						<th><img src="https://placeholdit.imgix.net/~text?txtsize=7&txt=54%C3%9768&w=54&h=68" alt="Pic" class="img-responsive"></th> 
						<th><b>Assault Team 3d</b> <br> Descripción del juego, Lorem ipsum dolor sit amet, consectetuer adipiscing.</th>  
						<th class="downLoad"><a href="#"><i class="fa fa-download fa-2x" aria-hidden="true"></a></i></th>
					</tr> 
					<tr> 
						<th scope="row"><img src="https://placeholdit.imgix.net/~text?txtsize=7&txt=54%C3%9768&w=54&h=68" alt="Pic" class="img-responsive"></th>
						<th><b>Assault Team 3d</b> <br> Descripción del juego, Lorem ipsum dolor sit amet, consectetuer adipiscing.</th>  
						<th class="downLoad"><a href="#"><i class="fa fa-download fa-2x" aria-hidden="true"></a></i></th> 
					</tr> 					 
				</tbody> 
			</table>
			<div class="demo-gallery">
					<ul id="lightgallery" class="list-unstyled row">
						<li class="col-xs-6 col-sm-6 col-md-3" data-src="http://placehold.it/1200x800" data-sub-html="<h4>Titulo de la foto</h4>">
							<a href="">
								<i class="fa fa-search fa-2x" aria-hidden="true"></i>
								<img class="img-responsive img-rounded center-block" src="http://placehold.it/500x450">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3" data-src="http://placehold.it/1200x800" data-sub-html="<h4>Titulo de la foto</h4>">
							<a href="">
							<i class="fa fa-search fa-2x" aria-hidden="true"></i>	
								<img class="img-responsive img-rounded" src="http://placehold.it/500x450">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3" data-src="http://placehold.it/1200x800" data-sub-html="<h4>Titulo de la foto</h4>">
							<a href="">
								<i class="fa fa-search fa-2x" aria-hidden="true"></i>
								<img class="img-responsive img-rounded center-block" src="http://placehold.it/500x450">
							</a>
						</li>
						<li class="col-xs-6 col-sm-6 col-md-3" data-src="http://placehold.it/1200x800" data-sub-html="<h4>Titulo de la foto</h4>">
							<a href="">
								<i class="fa fa-search fa-2x" aria-hidden="true"></i>
								<img class="img-responsive img-rounded center-block" src="http://placehold.it/500x450">
							</a>
						</li>
					</ul>
				</div>
		</div>
	</div>
</div>