<header>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<button type="button" class="btn btn-log" data-toggle="modal" data-target="#logIn">Ingresar</button>
			</div>
			<div class="col-md-4">
				<a href="index.php">
					<img data-src="img/logo.png" alt="Divercel" class="img-responsive center-block logo">
				</a>
			</div>
			<div class="col-md-4">
				<input type="serch" class="form-control serch" name="serch" placeholder="Buscar">
			</div>
		</div>
	</div>
</header>

<!-- Modal -->
<div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="logInLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<img data-src="img/logo.png" alt="Divercel" class="img-responsive center-block logo">
			</div>
			<div class="modal-body">
				<p class="text-center">
					INGRESA PARA DESCARGAR <br> EL MEJOR CONTENIDO <br> EN TU CELULAR
				</p>
				<form action="">
					<div class="form-group">
						<input type="tel" name="celular" class="form-control" placeholder="Ingresa tu número celular">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-log center-block">Ingresar</button>
					</div>
				</form>
				<p class="text-center">
					¿NO estás suscrito? <br>
					<a href="#singIn" type="button" class="link" data-toggle="modal" data-dismiss="modal" data-target="#singIn">Regístrate aquí</a>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="singIn" tabindex="-1" role="dialog" aria-labelledby="singInLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<img data-src="img/logo.png" alt="Divercel" class="img-responsive center-block logo">
			</div>
			<div class="modal-body">
				<p class="text-center">
					ACTÍVATE YA <br>
					<span>Responde con la palabra ACEPTO el <br>mensaje de texto enviado al <br>XXXXXXX.</span>
				</p>
				<form action="">
					<div class="form-group">
						<input type="tel" name="celular" class="form-control" placeholder="Ingresa tu número celular">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-log center-block">Continuar</button>
					</div>
				</form>
				<p class="text-center">
					¿YA estás suscrito? <br>
					<a href="#logIn" type="button" class="link" data-toggle="modal" data-dismiss="modal" data-target="#logIn">Ingresa aquí</a>
				</p>
				<p class="text-center">
					<a href="#tyc" type="button" class="link" data-toggle="modal" data-dismiss="modal" data-target="#tyc">Términos y condiciones</a>
				</p>
			</div>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="tyc" tabindex="-1" role="dialog" aria-labelledby="tycLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<img data-src="img/logo.png" alt="Divercel" class="img-responsive center-block logo">
			</div>
			<div class="modal-body">
				<div>

					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#Claro" aria-controls="Claro" role="tab" data-toggle="tab">Claro</a></li>
						<li role="presentation"><a href="#Movistar" aria-controls="Movistar" role="tab" data-toggle="tab">Movistar</a></li>
						<li role="presentation"><a href="#Tigo" aria-controls="Tigo" role="tab" data-toggle="tab">Tigo</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="Claro">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quos doloribus doloremque, illum consequatur nihil error optio praesentium tempora repudiandae, ut obcaecati necessitatibus quas id sunt? Et sint fugit delectus.</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="Movistar">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quos doloribus doloremque, illum consequatur nihil error optio praesentium tempora repudiandae, ut obcaecati necessitatibus quas id sunt? Et sint fugit delectus.</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="Tigo">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti quos doloribus doloremque, illum consequatur nihil error optio praesentium tempora repudiandae, ut obcaecati necessitatibus quas id sunt? Et sint fugit delectus.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>