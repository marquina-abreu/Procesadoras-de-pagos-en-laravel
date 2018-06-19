@extends('template.main')
@section('title','Comprar producto')
@section('scriptsup')
<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>
<script type="text/javascript">
	Mercadopago.setPublishableKey("TEST-9167d884-0baf-4459-adfc-a5bab8238b10");
</script>
@endsection
@section('content')

<style type="text/css">
	hr { 
   border-top: 2px solid #050100; 
   border-bottom: 2px solid rgb(0, 47, 124); 
   border-left:none; 
   border-right:none; 
   height: 6px; 
 } 
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.materialboxed').materialbox();

    $('.tabs').tabs();
 
  });
</script>
<br>
<div class="row">
<div class="col m2 l2"></div>
    <div class="col s12 m7 l7">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="{{ asset('images/productos/ps4.png') }}" class=" materialboxed responsive-img" style="width:300px; height: 280px;">
            </center>
            </div>
            
        </div>
    </div>

      
</div>

<div class="row">
	<div class="col s12 m7 l7">
		<h5>Metodos de pagos:</h5>
		<hr>
		<br>
      <ul id="tabs-swipe-demo" class="tabs">
    	<li class="tab "><a href="#test-swipe-1">TARJETA DE CREDITO</a></li>
    	<li class="tab "><a href="#test-swipe-2">PAYPAL</a></li>
    	<li class="tab "><a href="#test-swipe-3">MERCADOPAGO</a></li>
  	 </ul>
  	 <!--STRIPE CREDIT CARD-->
  <div id="test-swipe-1">
  	 {!! Form::open(['route'=>'process_pay','method'=>'POST','id'=>'payment-form']) !!}
  	 	<div class="card-errors"></div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="icon_prefix" type="text" data-stripe="number" name="targ" class="validate" data-length="20">
          	<label for="icon_prefix">Numero de tarjeta</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="icon_prefix2" type="text" data-stripe="exp_month" class="validate" data-length="2">
          	<label for="icon_prefix2">Mes de vencimiento</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input  id="icon_prefix3" type="text" data-stripe="exp_year" class="validate" data-length="2">
          	<label id="icon_prefix3">Año de vencimiento</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="icon_prefix4" type="text" data-stripe="cvc"  class="validate" data-length="4">
          	<label for="icon_prefix4">CVC</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="icon_prefix5" type="text" data-stripe="address_zip"  class="validate" data-length="6">
          	<label for="icon_prefix5">Codigo Postal</label>
         </div>
            
            <button type="submit" class="submit right waves-effect waves-light btn-small blue">Procesar pago</button>
            {!! Form::close() !!}
  </div>
  <div id="test-swipe-2" class="col s12">
  	<img src="{{asset('images/paypal.png')}}" class="responsive-img" style="width:280px; height:100px; " alt="">
  	<br><br>
  	<a href="" class="right waves-effect waves-light btn-small blue">Procesar pago</a>
  </div>

<!--MERCADOPAGO CREDIT CARD-->
  <div id="test-swipe-3" class="col s12">
  	{!! Form::open(['route'=>'process_paymp','method'=>'POST','id'=>'pay','name'=>'pay']) !!}
  	 	<div class="card-errors"></div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="cardNumber" type="text" data-checkout="cardNumber"  class="validate" data-length="20">
          	<label for="cardNumber">Numero de tarjeta</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="email" type="text" name="email"  class="validate" data-length="50">
          	<label for="email">Correo</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="cardExpirationMonth" type="text" data-checkout="cardExpirationMonth" class="validate" data-length="2">
          	<label for="cardExpirationMonth">Mes de vencimiento</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input  id="cardExpirationYear" type="text" data-checkout="cardExpirationYear" class="validate" data-length="4">
          	<label id="cardExpirationYear">Año de vencimiento</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="securityCode" type="text" data-checkout="securityCode" class="validate" data-length="4">
          	<label for="securityCode">Codigo de seguridad</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="cardholderName" type="text" data-checkout="cardholderName" class="validate" data-length="20">
          	<label for="cardholderName">Nombres y apellido de la tarjeta</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<select id="docType" data-checkout="docType"></select>
          	<label for="docType">Tipo de Doc</label>
         </div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="docNumber" type="text" data-checkout="docNumber" class="validate" data-length="8">
          	<label for="docNumber">Nro de Documento</label>
         </div>
            <input type="hidden" name="paymentMethodId" />
            <button type="submit" class="right waves-effect waves-light btn-small blue">Procesar pago</button>
            {!! Form::close() !!}
  </div>
        
  
</div>
</div>

@endsection
@section('scriptsdown')
<script src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
	Stripe.setPublishableKey('pk_test_ytgUR2qOlHxwJqzC30DSsOtK');
</script>
<script src="{{asset('js/jsstripe.js')}}"></script>
<script src="{{asset('js/merc.js')}}"></script>
@endsection