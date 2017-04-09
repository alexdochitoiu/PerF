@extends('layouts.index')
@section('title')
    Login - PerF
 @endsection

@section('content')
	<div class="container container-min container-custom content">
		<div class="row">
			<div class="col-md-4">
				<form action="#" method="post" class="form-register-login-costum">
					<div class="form-group form-register-login-costum">
						<label for="username">Nume Cont / Email</label>
						<input class="form-control" type="text" name="username" id="username">
					</div>
					<div class="form-group">
						<label for="password">Parola</label>
						<input class="form-control" type="text" name="password" id="password">
					</div>
					<button type="submit" class="btn btn-primary btn-costum btn-login-position">Autentificare</button>
				</form>
			</div>
		</div>
	</div>
@endsection