<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprarController extends Controller
{
    //
    public function index() {

    	return view('comprar.index');
    }

    public function process(Request $req) {
    	
    	\Stripe\Stripe::setApiKey("sk_test_Ufm3sY3Ol8UOePcqiULd1n5r");

		$token=$req->stripeToken;

		try{
			\Stripe\Charge::create(array(
  			"amount" => 9000,
  			"currency" => "usd",
  			"source" => $token, // obtained with Stripe.js
  			"description" => "PRUEBA HECHA POR EL ING MOISES MARQUINA"
		));

		echo $token;
		echo "Pago exitoso<br>";
		}catch(\Stripe\Error\Card $e){
			echo "errorrrr moises ";
		}
		

  
    }

    public function processmp(Request $req) {
    	dd($req->all());

    }
}
