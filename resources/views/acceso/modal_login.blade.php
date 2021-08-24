		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->

		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="{{route('home')}}">
						<img class="brand-img mr-10" src="{{asset('img/logo.png')}}" alt="brand"/>
						<span class="brand-text">TRIAD</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
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
											<h3 class="text-center txt-dark mb-10">LOGIN TRIAD</h3>
											<h6 class="text-center nonecase-font txt-grey">Ingrese los datos que se le soliciten</h6>
										</div>
										<div class="form-wrap">
											<form action="#" method="POST">
												@csrf
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Correo Electrónico</label>
													<input type="email" value="{{ old('email') }}" class="form-control" required="" autofocus id="email" name="email" placeholder="Dirección de correo electrónico">
													@error('email') <p class="text-danger"> {{ $message }} </p> @enderror
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Contraseña</label>
													<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">¿Olvidó su contraseña?</a>
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="password" name="password" placeholder="Password">
													@error('password') <p class="text-danger"> {{ $message }} </p> @enderror
												</div>

												<div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" name="checkbox_2" type="checkbox">
														<label for="checkbox_2"> Mantener Inicio de Sesión</label>
													</div>
													<div class="clearfix"></div>
												</div>
												<div class="form-group text-center">
													<button type="submit" class="btn btn-primary  btn-rounded">INGRESAR</button>
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
