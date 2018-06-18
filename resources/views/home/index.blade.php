@extends('template.main')
@section('title','Home')
@section('content')
<div class="row">
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="{{ asset('images/productos/ps4.png') }}" class="responsive-img" style="width:300px; height: 280px;">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
               <center><a href="{{route('infopro')}}" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="images/productos/psp3000.png" style="width:300px; height: 280px;" class="responsive-img">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <center><a href="#" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="images/productos/monitor_asus.png" style="width:300px; height: 280px;" class="responsive-img">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <center><a href="#" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="images/productos/router.png" style="width:300px; height: 280px;" class="responsive-img">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <center><a href="#" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="images/productos/audifono.png" style="width:300px; height: 280px;" class="responsive-img">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <center><a href="#" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image">
            <center>
                <img src="images/productos/Alienware-PNG-HD.png" style="width:300px; height: 280px;" class="responsive-img">
            </center>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information.
                    I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
                <center><a href="#" class="waves-effect waves-light btn-small">Ver</a></center>
            </div>
        </div>
    </div>
</div>
@endsection
