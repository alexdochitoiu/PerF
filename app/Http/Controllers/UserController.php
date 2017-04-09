<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function postSignIn(Request $request) {

	}

	public function postRegister(Request $request) {
		$username = $request['username'];
		$email = $request['email'];
		$password = bcrypt($request['password']);
		$last_name = $request['last_name'];
		$first_name = $request['first_name'];
		$phone_number = $request['phone_number'];
		$locality = $request['locality'];
		$individual = $request['individual'];

		$user = new User();
		
		$user->NUME_CONT = $username;
		$user->PAROLA = $password;
		$user->NUME = $last_name;
		$user->PRENUME = $first_name;
		$user->PERS_FIZICA = $individual;
		$user->EMAIL = $email;
		$user->NR_TELEFON = $phone_number;
		$user->LOCALITATE = $locality;

		$user->save();

		return redirect()->back();
	}
}