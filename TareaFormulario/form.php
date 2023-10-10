<?php
include "head.php";
    $nombre= $_POST["txtNombre"];
    $apellido= $_POST["txtApellidos"];
    $edad= $_POST["txtEdad"];
    $correo= $_POST["txtCorreo"];
    $password= $_POST["txtPassword"];
?>

<Center>
        <nav class="">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo">Resultados</a>
                <ul class="right hide-on-med-and-down">
                </ul>
            </div>
        </nav>
</Center> 

<ul class="collection">
    <li class="collection-item avatar">
        <i class="material-icons circle green">account_box</i>
        <span class="title">Nombre</span>
        <p><?=$nombre?></p>
        <a href="#!" class="secondary-content"><i class="material-icons">beenhere</i></a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">account_box</i>
        <span class="title">Apellidos</span>
        <p><?=$apellido?></p>
        <a href="#!" class="secondary-content"><i class="material-icons">beenhere</i></a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">cake</i>
        <span class="title">Edad</span>
        <p><?=$edad?></p>
        <a href="#!" class="secondary-content"><i class="material-icons">beenhere</i></a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">contact_mail</i>
        <span class="title">Correo</span>
        <p><?=$correo?></p>
        <a href="#!" class="secondary-content"><i class="material-icons">beenhere</i></a>
    </li>
    <li class="collection-item avatar">
        <i class="material-icons circle green">vpn_key</i>
        <span class="title">Password</span>
        <p><?=$password?></p>
        <a href="#!" class="secondary-content"><i class="material-icons">beenhere</i></a>
    </li>
</ul>
 
<!-- <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a> -->
<center><a class="waves-effect waves-light red btn" href='index.php'><i class="material-icons right">reply</i>Regresar</a> </center>
<?php            
include "footeer.php";
?>