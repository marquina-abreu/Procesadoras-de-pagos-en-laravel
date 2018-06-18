@extends('template.main')
@section('title','Producto')
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
  });
</script>
<div class="row">
    <div class="col s12 m5 l5">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="{{ asset('images/productos/ps4.png') }}" class="materialboxed responsive-img" style="width:300px; height: 280px;">
            </center>
            </div>
            
        </div>
    </div>
    <div class="col m2 l2"></div>
    <div class="col s12 m5 l5">
        <div class="card">
            <div class="card-image">
           	<h5>PS4 1TB PRO</h5>
           	<hr>
           	<br>
           	<p>Producto: Nuevo<p>
           	<br>
           	<p>Descripción: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nihil quam recusandae labore deserunt ducimus, commodi nostrum dignissimos perferendis sed quibusdam, sequi veniam veritatis adipisci illo ab laborum saepe repellat?<p>
           	
           	<br>
			<h5 style="display:inline-block;"><b>20 USD</b></h5>
           	 <a href="{{route('comprarpro')}}" class="waves-effect waves-light btn-small">Comprar</a>
           	<br><br><br>
            </div>
            
        </div>
    </div>    
</div>
<div class="row">
	<div class="col s12 m6 l6">
		<h5>Comentarios:</h5>
		<hr>
	</div>
	<div class="col s1 m1 l1"></div>
	<div class="col s12 m5 l5">
		<h5>Reputación y valoración:</h5>
		<hr>
	</div>
	
</div>

@endsection