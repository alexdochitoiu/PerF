<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getHome() {
		return view('pages.home');
	}

	public function getLogin() {
		return view('pages.login');
	}

	public function getRegister() {
		return view('pages.register');
	}
}