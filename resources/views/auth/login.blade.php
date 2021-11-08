@extends('layouts.app', [
	'paceTop' => true,
	'appSidebarHide' => true,
	'appHeaderHide' => true,
	'appContentClass' => 'p-0'
])

@section('title', 'Ingreso')

@push('css')
		<style>

		</style>
@endpush

@section('content')
	<!-- BEGIN login -->
	<div class="login login-with-news-feed">
		<!-- BEGIN news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/assets/img/login-bg/sayco.jpg)"></div>
			<div class="news-caption">
					<h4 class="caption-title"><b>{{ env('APP_NAME') }}</b> Plataforma Web</h4>
					<p>
						Administración, Control Presupuestal y Autorización de Estimación de Obra

					</p>
			</div>
		</div>
		<!-- END news-feed -->

		<!-- BEGIN login-container -->
		<div class="login-container">
			<!-- BEGIN login-header -->
			<div class="login-header mb-30px">
				<div class="brand">
					<div class="d-flex align-items-center">
						<span class="logo"></span>


						<b>{{ env('APP_NAME') }}</b> &nbsp; Ingreso
					</div>
					<small>Ingrese sus Credenciales</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- END login-header -->

			<!-- BEGIN login-content -->
			<div class="login-content">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}" class="fs-13px" autocomplete="off">
                    @csrf
					<div class="form-floating mb-15px">
						<input type="email" class="form-control h-45px fs-13px" placeholder="Correo" id="email" name="email" />
						<label for="email" class="d-flex align-items-center fs-13px text-gray-600">Correo</label>
					</div>
					<div class="form-floating mb-15px">
						<input type="password" class="form-control h-45px fs-13px" placeholder="Contraseña" id="password" name="password" />
						<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Contraseña</label>
					</div>
					<!-- <div class="form-check mb-30px">
						<input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
						<label class="form-check-label" for="rememberMe">
							Recuerdame
						</label>
					</div> -->
					<div class="mb-15px">
						<button type="submit" class="btn btn-success d-block h-45px w-100 btn-lg fs-14px">Ingresar</button>
					</div>
					<!-- <div class="mb-40px pb-40px text-inverse">
						Not a member yet? Click <a href="/register/v3" class="text-primary">here</a> to register.
					</div> -->
					<hr class="bg-gray-600 opacity-2" />
					<div class="text-gray-600 text-center text-gray-500-darker mb-0">
						&copy; CONSILIO Derechos Reservados 2021
					</div>
				</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login-container -->
	</div>
	<!-- END login -->
@endsection
