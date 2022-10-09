<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripController extends Controller
{
 public function index(){
    return view('form');
 }

 public function stripepay(Request $request){
    $input=$request->all();
 
    \Stripe\Stripe::setApiKey('sk_test_51LqUJqSBSdD6wKftqtIR5gIwc1oYTUkr7BEXSn7iWNg52QkOtLfx24ZDvzoVXMkSn2CrGkTvLaiQGX1KEi6imySN00LZWKrrNK');

    // $charge = \Stripe\PaymentIntent::create([
    //     'source' => $_POST['stripeToken'],
    //     'description' => "10 cucumbers from Roger's Farm",
    //     'amount' => 2000,
    //     'currency' => 'usd',
    //   ]);

     $charge= \Stripe\PaymentIntent::create(
        [
        'source' => $_POST['stripeToken'],

          'amount' => 1099,
          'currency' => 'usd',
          'automatic_payment_methods' => ['enabled' => true],
        ]
      );
      dd($charge);

 }


}
