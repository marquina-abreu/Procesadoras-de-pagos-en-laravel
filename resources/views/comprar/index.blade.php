@extends('template.main')
@section('title','Comprar producto')
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
<br>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.materialboxed').materialbox();

    $('.tabs').tabs();
 
  });
</script>
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
  <div id="test-swipe-1">
  	 {!! Form::open(['route'=>'home','method'=>'POST']) !!}
  	 	<div class="card-errors"></div>
         <div class="input-field">
          	<i class="material-icons prefix">account_circle</i>
          	<input id="icon_prefix" type="text" data-stripe="number" class="validate" data-length="20">
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
            
            <button type="submit" class="waves-effect waves-light btn-small blue">Procesar</button>
            {!! Form::close() !!}
  </div>
  <div id="test-swipe-2" class="col s12 red">Test 2</div>
  <div id="test-swipe-3" class="col s12 green">Test 3</div>
        
  
</div>
</div>

@endsection