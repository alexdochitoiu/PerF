@extends('layouts.index')
@section('title')
    Register - PerF
 @endsection

@section('content')
	<div class="container  container-min container-custom content">
		<div class="row">
			<div class="col-md-12">
				<form action="{{ route('register') }}" method="post">
					<div class="col-md-6 form-register-login-costum">
						<h3><b>Informatii Cont</b></h3>
						<div class="form-group">
							<label for="username">Nume Cont</label>
							<input class="form-control" type="text" name="username" id="username">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input class="form-control" type="text" name="username" id="username">
						</div>					
						<div class="form-group">
							<label for="password">Parola</label>
							<input class="form-control" type="text" name="password" id="password">
						</div>
						<div class="form-group">
							<label for="password">Confirma Parola</label>
							<input class="form-control" type="text" name="password" id="password">
						</div>
						<div class="form-group">
							<input type="checkbox" id="terms" name="terms"/>
    						<label for="terms"><a href="#">Termeni si Conditii</a></label>
						</div>
					</div>
					<div class="col-md-6 form-register-login-costum">
						<h3><b>Informatii Personale</b></h3>
						<div class="form-group">
							<label for="last_name">Nume</label>
							<input class="form-control" type="text" name="last_name" id="last_name">
						</div>
						<div class="form-group">
							<label for="first_name">Prenume</label>
							<input class="form-control" type="text" name="first_name" id="first_name">
						</div>
						<div class="form-group">
							<label for="phone_number">Numar Telefon</label>
							<input class="form-control" type="text" name="phone_number" id="phone_number">
						</div>
						<div class="form-group">
							<label for="locality">Localitate</label>
							<input class="form-control" type="text" name="locality" id="locality">
						</div>
						<div class="form-group">
							<input type="checkbox" id="individual" name="individual"/>
    						<label for="individual">Persoana Fizica</label>
						</div>
						<button type="submit" class="btn btn-primary btn-costum btn-register-position">Inregistreaza Cont</button>
						<input type="hidden" name="_token" value="{{ Session::token() }}">
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection