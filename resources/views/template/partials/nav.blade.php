<style>
    #navv2 > li:hover{
        background-color:rgb(190, 213, 216);
    }
    #navv1 > li :hover{
        background-color:rgb(190, 213, 216);
    }
 
</style>
<div class="navbar-fixed">
    <nav style="background-color:rgb(0, 47, 124)">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo"></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="left hide-on-med-and-down" id="navv1">
            <li><a style="letter-spacing: 6px; font-size: 22px;" id="u">Payments</a></li>
            </ul>
            <ul class="right hide-on-med-and-down" id="navv2">
                <li><a href="{{route('home')}}">Inicio</a></li>
                <li><a href="../secciones/">Productos</a></li>
                <li><a href="../logout.php" >Login</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul id="mobile-demo" class="sidenav">
    <li><div class="user-view">
            <div class="background">
                <img src="../images/cuadro.jpg">
            </div>
            <a href="#user"><img class="circle" src="../images/user.png"></a>
            <a href="#name"><span class="white-text name">TestMoises</span></a>
        </div></li>
    <li><a href=""><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="../materias_inscritas/"><i class="material-icons">add_circle</i>Productos</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../logout.php" class=""><i class="material-icons">settings_power</i>Login</a></li>

</ul>