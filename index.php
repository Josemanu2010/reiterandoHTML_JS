<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>USERS REGISTER</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/css.css">
</head>
<body>
	
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="" action="">
					<div id="father">
						<div class="card" id="micard">
							<div class="card-header">
								<label class="text-dark" for="">SECCIÒN DE USUARIO</label>
							</div>
							<div class="card-body">

								<div class="row">
									<div class="col-md-4">
										<label id="lbl" for="" class="badge badge-dark">Nombre</label>
									</div>
									<div class="col-md-8">
										<input class="form-control" type="text" id="nombre" placeholder="">
									</div>
								</div>

								<hr class="a">
								
								<div class="row">
									<div class="col-md-4">
										<label id="lbl" for="" class="badge badge-dark">Correo</label>
									</div>
									<div class="col-md-8">
										<input class="form-control" type="text" id="correo" placeholder="">
									</div>
								</div>
								
								<hr class="a">

								<div class="row">
									<div class="col-md-4">
										<label id="lbl" for="" class="badge badge-dark">NickName</label>
									</div>
									<div class="col-md-8">
										<input class="form-control" type="text" id="nickname" placeholder="">
									</div>
								</div>

								<hr class="a">

								<div class="row">
									<div class="col-md-4">
										<label id="lbl" for="" class="badge badge-dark">Foto URL</label>
									</div>
									<div class="col-md-8">
										<input class="form-control" type="text" id="foto" placeholder="">
									</div>
								</div>

								<hr class="a">
								

							</div>
							<div class="card-footer">
								<input type="button" id="mibtn" value="REGISTRAR USUARIO" class="btn btn-danger">
								<hr>
								<input type="button" id="verUsers" value="VER USUARIOS" class="btn btn-warning">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/index.js"></script>

</body>
</html>