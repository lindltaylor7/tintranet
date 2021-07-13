		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.html">
						<img class="brand-img mr-10" src="{{asset('img/logo.png')}}" alt="brand"/>
						<span class="brand-text">TRIAD</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">¿Ya tienes una cuenta?</span>
					<a class="inline-block btn btn-primary btn-rounded btn-outline" href="{{route('login')}}">INICIAR SESIÓN</a>
				</div>
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
                <div class="container-fluid col-lg-6 col-md-6">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<img class="brand-img mr-10" width="100%" src="{{asset('img/login_registro.jpg')}}" alt="brand"/>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				<div class="container-fluid col-lg-6 col-md-6">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">REGISTRARSE A TRIAD</h3>
											<h6 class="text-center nonecase-font txt-grey">Ingrese los datos solicitados</h6>
										</div>	
										<div class="form-wrap">
											<form action="#">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputName_1">Nombre: (*)</label>
													<input type="text" class="form-control" required="" id="name" placeholder="Nombre Completo">
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Correo Electrónico: (*)</label>
													<input type="email" class="form-control" required="" id="email" placeholder="Dirección de Correo Electrónico">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Contraseña: (*)</label>
													<input type="password" class="form-control" required="" id="password" placeholder="Contraseña deseada">
												</div>
												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Acepto todos los <span class="txt-primary">Términos</span></label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary btn-rounded">REGISTRAR</button>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->