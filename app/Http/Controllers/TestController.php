<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;

class TestController extends Controller
{
	public function test() {
		$pdo = DB::getPdo();
		$stmt = $pdo->prepare('SELECT * FROM Utilizatori');
		$stmt->execute();
		$i = 1;
    	while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    		echo $i . '. Ma cheama <b>'.$result['nume'].' '.$result['prenume'].'</b> !!</br>';
    		$i++;
    	}
	}
}
